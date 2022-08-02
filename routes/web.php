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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
