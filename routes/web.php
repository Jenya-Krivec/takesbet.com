<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BettingController;
use App\Http\Controllers\CasinoController;
use App\Http\Controllers\RatingController;
use App\Http\Middleware\LocaleMiddleware;
use App\Helpers\Language;

Route::prefix(Language::getLocale())->middleware([LocaleMiddleware::class])->group(function () {

    Route::get('/', [DashboardController::class, 'create'])->name('index');

    Route::get('/betting', [BettingController::class, 'create'])->name('betting');

    Route::get('/casino', [CasinoController::class, 'create'])->name('casino');

});

Route::post('/rate', [RatingController::class, 'store']);
