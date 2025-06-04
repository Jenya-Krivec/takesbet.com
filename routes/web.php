<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BettingController;
use App\Http\Controllers\CasinoController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PromoCodeController;
use App\Http\Controllers\MobileAppController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\BookmakerController;
use App\Http\Middleware\LocaleMiddleware;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Helpers\Language;

Route::prefix(Language::getLocale())->middleware([LocaleMiddleware::class])->group(function () {

    Route::get('/', [DashboardController::class, 'create'])->name('index');

    Route::get('/betting', [BettingController::class, 'create'])->name('betting');

    Route::get('/casino', [CasinoController::class, 'create'])->name('casino');

    Route::get('/bookmakers/{key}', [ReviewController::class, 'create'])->name('review');

    Route::get('/promo-code/{key}', [PromoCodeController::class, 'create'])->name('promocode');

    Route::get('/mobile-app/{key}', [MobileAppController::class, 'create'])->name('mobileapp');

});

Route::post('/rate', [RatingController::class, 'store']);

Route::get('/login', [AuthenticateController::class, 'create'])->name('admin.login');

Route::post('/login', [AuthenticateController::class, 'store']);

Route::middleware([AuthenticateMiddleware::class])->group(function () {

    Route::get('/admin/index', [AdminIndexController::class, 'create'])->name('admin.index');
    Route::get('/admin/bookmakers', [BookmakerController::class, 'create'])->name('admin.bookmakers');
    Route::get('/admin/bookmakers/{key}', [BookmakerController::class, 'edit'])->name('admin.editBookmaker');
    Route::post('/admin/bookmaker/{key}', [BookmakerController::class, 'store'])->name('admin.storeBookmaker');
    Route::get('/admin/review/{key}', [ReviewController::class, 'edit'])->name('admin.editReview');
    Route::get('/admin/payments', [AdminIndexController::class, 'create'])->name('admin.payments');
    Route::get('/admin/currencies', [AdminIndexController::class, 'create'])->name('admin.currencies');
    Route::get('/admin/sports', [AdminIndexController::class, 'create'])->name('admin.sports');

});



