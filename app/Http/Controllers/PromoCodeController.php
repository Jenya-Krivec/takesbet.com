<?php

namespace App\Http\Controllers;

use App\Models\PromoCode;
use Illuminate\Http\Request;
use \Illuminate\View\View;
use App\Models\Bookmaker;

class PromoCodeController extends Controller
{
    public function create(string $key) : View
    {
        $bookmaker = Bookmaker::selectRaw('bookmakers.*, IF(COUNT(ratings.id) = 0, 0, ROUND(SUM(ratings.rating) / COUNT(ratings.id), 1)) as rating')
            ->leftJoin('ratings', 'bookmakers.id', '=', 'ratings.bookmaker_id')
            ->where('bookmakers.key', '=', $key)
            ->groupBy('bookmakers.id')
            ->get()
            ->toArray()[0];

        $page = PromoCode::select('promo_codes.*')
            ->where('promo_codes.bookmaker_id', '=', $bookmaker['id'])
            ->orderBy('promo_codes.order', 'asc')
            ->get()->
            toArray();

        return view('promocodes', ['bookmaker' => $bookmaker, 'page' => $page]);
    }
}
