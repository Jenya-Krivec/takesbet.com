<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Bookmaker;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Returns the main page of the website.
     *
     * @return View
     */
    public function create():View
    {
        // Get all active bookmakers from the database and calculate their rating and rating count
        $bookmakers = Bookmaker::selectRaw('bookmakers.*, IF(COUNT(ratings.id) = 0, 0, ROUND(SUM(ratings.rating) / COUNT(ratings.id), 1)) as rating, COUNT(ratings.id) as rating_count')
            ->leftJoin('ratings', 'bookmakers.id', '=', 'ratings.bookmaker_id')
            ->where('bookmakers.active', '=', 1)
            ->groupBy('bookmakers.id')
            ->orderBy('bookmakers.order', 'asc')
            ->get();
        $topSites = Bookmaker::selectRaw('bookmakers.*')
            ->leftJoin('ratings', 'bookmakers.id', '=', 'ratings.bookmaker_id')
            ->where('bookmakers.active', '=', 1)
            ->groupBy(['bookmakers.id', 'ratings.rating'])
            ->orderBy('ratings.rating', 'desc')
            ->get(10);
        $payments = Payment::selectRaw('payments.*')
            ->where('logo', '!=', '')
            ->get(10);
        // Return the main page view with the bookmakers data
        return view('index', ['bookmakers' => $bookmakers, 'topSites' => $topSites, 'payments' => $payments]);
    }
}
