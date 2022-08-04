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

// Ссылки главной страницы
Route::view('/', 'welcome');
Route::prefix('home')->group(function () {
    Route::view('/about', 'home.about')->name('about');
    Route::view('/about/contacts', 'home.contacts')->name('contacts');
    Route::view('/investors', 'home.investors')->name('investors');
    Route::view('/investors/offers', 'home.investment-offers')->name('investment-offers');
    Route::view('/privacy/policy', 'home.privacy-policy')->name('privacy-policy');
    Route::view('/privacy/rules', 'home.privacy-rules')->name('rules');
    Route::view('/privacy/documents', 'home.privacy-documents')->name('documents');
});

// Мобильная версия
Route::prefix('mobile')->group(function () {
    Route::view('/', 'mobile.home')->name('m-home');

    Auth::routes();

    Route::middleware('auth')->group(function () {
        Route::view('dashboard', 'mobile.dashboard')->name('m-dashboard');
        Route::view('rau/by', 'mobile.rau.by')->name('m-by');
    });
});

Route::redirect('/home', '/mobile/dashboard')->name('home');
