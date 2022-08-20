<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\Payeer\TradeController;

class CoinController extends Controller
{
    /**
     * @param $coin
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function viewCoin($coin)
    {
        $coin = strtoupper($coin);
        if ($coin == 'RAU') {
            $data = [
                'price' => 100,
            ];
        } else {
            $data = [
                'price' => TradeController::getCoinData($coin),
            ];
        }

        return view('mobile.coin.more', compact('coin', 'data'));
    }
}
