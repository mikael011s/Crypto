<?php

namespace App\Http\Controllers\Api\Coins;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Payeer\TradeController;

class SetController extends Controller
{
    protected array $coins = [
       'BTC',
       'ETH',
       'EGLD',
       'SAND',
       'SOL'
    ];

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function iterate($coin)
    {
        foreach ($this->coins as $coin) {
            $rate = $this->getRate($coin);

            if ($rate !== false) {
                $this->setDataInTable($coin, $rate);
            }
        }
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function setDataInTable($coin, $rate)
    {
        Rate::create([
            'coin' => $coin . '_RUB',
            'rate' => $rate
        ]);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getRate($coin)
    {
        $rate = TradeController::getCoinData($coin);

        if (!empty($rate))
            return $rate[$coin . '_RUB']->last;
        else
            return false;
    }
}
