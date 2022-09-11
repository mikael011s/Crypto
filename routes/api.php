<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Freekassa payment
Route::prefix('/payment/')->group(function () {
    // Freekassa
    Route::post('/', 'App\Http\Controllers\Api\Freekassa\FreekassaPostbackController@pay');

    // Payok payment
    Route::post('/payok', 'App\Http\Controllers\Api\Payok\PayokPostbackController@pay');

    // Just redirects
    Route::redirect('/success', '/mobile/wallet');
    Route::redirect('/error', '/mobile/rau/by');
});
