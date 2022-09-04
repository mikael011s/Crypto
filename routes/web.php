<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// В случае ошибки с кроном
Route::get('update-rate', 'App\Http\Controllers\RauCoinController@updateRate');

// Ссылки главной страницы
Route::view('/', 'welcome');
Route::prefix('home')->group(function () {
    Route::view('/about', 'home.about')->name('about');
    Route::view('/about/contacts', 'home.contacts')->name('contacts');
    Route::view('/about/plans', 'home.plans')->name('plans');
    Route::view('/about/faq', 'home.faq')->name('faq');
    Route::view('/news', 'home.news')->name('news');
    Route::view('/investors', 'home.investors')->name('investors');
    Route::view('/startup', 'home.startup')->name('startup');
    Route::view('/investors/offers', 'home.investment-offers')->name('investment-offers');
    Route::view('/privacy/policy', 'home.privacy-policy')->name('privacy-policy');
//    Route::view('/privacy/rules', 'home.privacy-rules')->name('rules');
//    Route::view('/privacy/documents', 'home.privacy-documents')->name('documents');
});

// Мобильная версия
Route::prefix('mobile')->group(function () {
    Route::view('/', 'mobile.home')->name('m-home');

    Auth::routes();

    Route::get('/register/{id}', function ($id) {
        setcookie('referral', $id);
        return redirect()->route('register');
    });

    Route::middleware('auth')->group(function () {
        Route::view('dashboard', 'mobile.dashboard')->name('m-dashboard');
        Route::view('stat', 'mobile.stats')->name('m-stats');
        Route::view('contact', 'mobile.contact')->name('m-contact');

        Route::get('wallet', function () {
            $transactions = \App\Models\Transaction::where('user_id', \Illuminate\Support\Facades\Auth::id())->get();
            return view('mobile.wallet', compact('transactions'));
        })->name('m-wallet');

        Route::view('rounds', 'mobile.rounds')->name('m-rounds');

        Route::view('rau/by', 'mobile.rau.by')->name('m-by');
        Route::view('rau/sell', 'mobile.rau.sell')->name('m-sell');
        Route::view('rau/swap', 'mobile.rau.swap')->name('m-swap');

        Route::view('profile', 'mobile.profile.show')->name('m-profile');

        Route::get('coin/{coin}', 'App\Http\Controllers\CoinController@viewCoin')->name('coin-more');

        Route::post('payment/init', 'App\Http\Controllers\PaymentController@initPay')->name('payment.init');

        Route::resources([
            'my-profile' => \App\Http\Controllers\UsersController::class
        ]);
    });
});

// Админ панель
Route::prefix('panel')->middleware('auth')->middleware('admin')->group(function () {
    Route::view('/', 'admin.main')->name('admin-main');

    Route::resources([
        // Пользователи
        'users' => \App\Http\Controllers\UsersController::class,
    ]);

    // Управление курсом
    Route::view('/currency/edit', 'admin.currency.edit')->name('currency-edit');
    Route::post('/currency/edit', 'App\Http\Controllers\RauCoinController@edit')->name('currency-save');
});

Route::redirect('/home', '/mobile/dashboard')->name('home');
