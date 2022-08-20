<?php

namespace App\Http\Controllers\Api\Payeer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    private static string $url = 'https://payeer.com/api/';

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function getCoinData($coin)
    {
        $client = new \GuzzleHttp\Client();

        $response = json_decode($client->get( self::$url . "trade/ticker", [
            \GuzzleHttp\RequestOptions::JSON => [
                'pair' => "{$coin}_RUB"
            ]
        ])->getBody());

        if ($response->success !== false)
            return (array) $response->pairs;
        else
            return false;
    }
}
