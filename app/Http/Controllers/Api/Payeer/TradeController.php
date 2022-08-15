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

        $response = $client->get( self::$url . "trade/ticker", [
            \GuzzleHttp\RequestOptions::JSON => [
                'pair' => "{$coin}_RUB"
            ]
        ]);

        return (array) json_decode($response->getBody())->pairs;
    }
}
