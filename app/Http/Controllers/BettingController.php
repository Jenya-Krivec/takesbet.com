<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BettingController extends Controller
{
    /**
     * Display the betting page
     *
     * @return View
     */
    public function create(): View
    {
        // Return the betting page
        return view('betting');
    }
}
