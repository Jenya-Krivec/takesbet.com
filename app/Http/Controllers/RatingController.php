<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    /**
     * Store a newly created rating in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        // Validate the incoming request data
        $request->validate([
            'id' => 'required|numeric',
            'rating' => 'required|numeric'
        ]);
        // Create a new rating record in the database
        Rating::create([
            'bookmaker_id' => $request->id,
            'rating' => $request->rating,
        ]);
        // Retrieve the updated rating and rating count for the specified bookmaker
        $rating = Rating::selectRaw('ratings.bookmaker_id, IF(COUNT(ratings.id) = 0, 0, ROUND(SUM(ratings.rating) / COUNT(ratings.id), 1)) as rating, COUNT(ratings.id) as rating_count')
            ->where('ratings.bookmaker_id', '=', $request->id)
            ->groupBy('ratings.bookmaker_id')
            ->get();
        // Return the rating data as a JSON response
        return response()->json($rating, 200);
    }
}
