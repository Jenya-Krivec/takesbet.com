<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasinoReviewController extends Controller
{
    public function create()
    {
        return view('casino_review');
    }
}
