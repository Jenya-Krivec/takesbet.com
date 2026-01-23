<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BettingController;
use App\Http\Controllers\CasinoController;
use App\Http\Controllers\CasinoReviewController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PromoCodeController;
use App\Http\Controllers\MobileAppController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\BookmakerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\CurrencyController;
use App\Http\Middleware\LocaleMiddleware;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Helpers\Language;

Route::prefix(Language::getLocale())->middleware([LocaleMiddleware::class])->group(function () {

    Route::get('/', [DashboardController::class, 'create'])->name('index');

    Route::get('/betting', [BettingController::class, 'create'])->name('betting');

    Route::get('/casino', [CasinoController::class, 'create'])->name('casino');

    Route::get('/casino/{key}', [CasinoReviewController::class, 'create'])->name('casino.review');

    Route::get('/bookmakers/{key}', [ReviewController::class, 'create'])->name('review');

    Route::get('/promo-code/{key}', [PromoCodeController::class, 'create'])->name('promocode');

    Route::get('/mobile-app/{key}', [MobileAppController::class, 'create'])->name('mobileapp');

});

Route::post('/rate', [RatingController::class, 'store']);

Route::get('/login', [AuthenticateController::class, 'create'])->name('admin.login');

Route::post('/login', [AuthenticateController::class, 'store']);

Route::post('/login/destroy', [AuthenticateController::class, 'destroy'])->name('admin.logout');

Route::middleware([AuthenticateMiddleware::class])->group(function () {

    Route::get('/admin/index', [AdminIndexController::class, 'create'])->name('admin.index');

    Route::get('/admin/bookmakers', [BookmakerController::class, 'create'])->name('admin.bookmakers');

    Route::get('/admin/bookmakers/{key}', [BookmakerController::class, 'edit'])->name('admin.editBookmaker');

    Route::post('/admin/bookmaker/{key}', [BookmakerController::class, 'store'])->name('admin.storeBookmaker');

    Route::get('/admin/promo-code/{key}', [PromoCodeController::class, 'edit'])->name('admin.editPromoCode');

    Route::post('/admin/promo-code/{key}', [PromoCodeController::class, 'store'])->name('admin.storePromoCode');

    Route::get('/admin/mobile-app/{key}', [MobileAppController::class, 'edit'])->name('admin.editMobileApp');

    Route::post('/admin/mobile-app/{key}', [MobileAppController::class, 'store'])->name('admin.storeMobileApp');

    Route::get('/admin/review/{key}', [ReviewController::class, 'edit'])->name('admin.editReview');

    Route::post('/admin/review/{key}', [ReviewController::class, 'store'])->name('admin.storeReview');

    Route::get('/admin/payments', [PaymentController::class, 'create'])->name('admin.payments');

    Route::post('/admin/payments', [PaymentController::class, 'store'])->name('admin.storePayments');

    Route::get('/admin/currencies', [CurrencyController::class, 'create'])->name('admin.currencies');

    Route::post('/admin/currencies', [CurrencyController::class, 'store'])->name('admin.storeCurrencies');

    Route::get('/admin/sports', [SportController::class, 'create'])->name('admin.sports');

    Route::post('/admin/sports', [SportController::class, 'store'])->name('admin.storeSports');

});



