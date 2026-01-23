<?php

namespace App\Http\Controllers;

use App\Models\Bookmaker;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CasinoController extends Controller
{
    /**
     * Displays the casino page.
     *
     * @return View
     */
    public function create(): View
    {
        // Get all active bookmakers from the database and calculate their rating and rating count
        $bookmakers = Bookmaker::selectRaw('bookmakers.*, IF(COUNT(ratings.id) = 0, 0, ROUND(SUM(ratings.rating) / COUNT(ratings.id), 1)) as rating, COUNT(ratings.id) as rating_count')
            ->leftJoin('ratings', 'bookmakers.id', '=', 'ratings.bookmaker_id')
            ->where('bookmakers.active', '=', 1)
            ->groupBy('bookmakers.id')
            ->orderBy('bookmakers.order', 'asc')
            ->get();
        return view('casino', ['bookmakers' => $bookmakers]);
    }
}
