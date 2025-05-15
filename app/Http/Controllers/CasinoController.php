<?php

namespace App\Http\Controllers;

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
        return view('casino');
    }
}
