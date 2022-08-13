<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoinController extends Controller
{
    public function viewCoin($coin)
    {
        return view('mobile.coin.more');
    }
}
