<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Bookmaker;
use \Illuminate\View\View;

class ReviewController extends Controller
{
    public function create(string $key): View
    {
        $bookmaker = Bookmaker::selectRaw('bookmakers.*, IF(COUNT(ratings.id) = 0, 0, ROUND(SUM(ratings.rating) / COUNT(ratings.id), 1)) as rating')
            ->leftJoin('ratings', 'bookmakers.id', '=', 'ratings.bookmaker_id')
            ->where('key', '=', $key)
            ->groupBy('bookmakers.id')
            ->get()
            ->toArray()[0];
        $bookmaker['payments'] = Bookmaker::find($bookmaker['id'])->payments()->get()->toArray();
        $bookmaker['currencies'] = Bookmaker::find($bookmaker['id'])->currencies()->get()->toArray();
        $bookmaker['sports'] = Bookmaker::find($bookmaker['id'])->sports()->get()->toArray();
        $bookmaker['restrictions'] = Bookmaker::find($bookmaker['id'])->restrictions()->get()->toArray();
        $bookmaker['supports'] = Bookmaker::find($bookmaker['id'])->supports()->get()->toArray();

        $review = Review::select('reviews.*')
            ->where('bookmaker_id', '=', $bookmaker['id'])
            ->orderBy('order', 'asc')
            ->get()->
            toArray();

        return view('review', ["bookmaker" => $bookmaker, "review" => $review]);
    }
    public function edit(string $key): View
    {
        $bookmaker = Bookmaker::where('key', '=', $key)->first();
        $bookmaker['payments'] = Bookmaker::find($bookmaker['id'])->payments()->get()->toArray();
        $bookmaker['currencies'] = Bookmaker::find($bookmaker['id'])->currencies()->get()->toArray();
        $bookmaker['sports'] = Bookmaker::find($bookmaker['id'])->sports()->get()->toArray();
        $bookmaker['restrictions'] = Bookmaker::find($bookmaker['id'])->restrictions()->get()->toArray();
        $bookmaker['supports'] = Bookmaker::find($bookmaker['id'])->supports()->get()->toArray();

        $review = Review::select('reviews.*')
            ->where('bookmaker_id', '=', $bookmaker['id'])
            ->orderBy('order', 'asc')
            ->get()->
            toArray();
        return view('admin.review', ["bookmaker" => $bookmaker, "review" => $review]);
    }
}
