<?php

namespace App\Http\Controllers;

use App\Models\Bookmaker;
use App\Models\Casino;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CasinoReviewController extends Controller
{
    public function create(string $key): View
    {
        $bookmaker = Bookmaker::selectRaw('bookmakers.*, IF(COUNT(ratings.id) = 0, 0, ROUND(SUM(ratings.rating) / COUNT(ratings.id), 1)) as rating')
            ->leftJoin('ratings', 'bookmakers.id', '=', 'ratings.bookmaker_id')
            ->where('bookmakers.key', '=', $key)
            ->groupBy('bookmakers.id')
            ->get()
            ->toArray()[0];

        $page = Casino::select('casinos.*')
            ->where('casinos.bookmaker_id', '=', $bookmaker['id'])
            ->orderBy('casinos.order', 'asc')
            ->get()
            ->toArray();
        return view('casino_review', ['bookmaker' => $bookmaker, 'page' => $page]);
    }
}
