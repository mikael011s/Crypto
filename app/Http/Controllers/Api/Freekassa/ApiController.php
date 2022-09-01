<?php

namespace App\Http\Controllers\Api\Freekassa;

use App\Helpers\Contracts\Merchant\MerchantApiContract;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller implements MerchantApiContract
{
    protected static string $url = 'https://api.freekassa.ru/v1/';
    protected static string $apiKey = '92129d1fb7cc5ea54af4e10d8f090a24';
    protected static string $secret1 = '5I3Ykk[l/B3)D&<';
    protected static string $secret2 = 'ezGke.jo/QZNp)c';

    public static int $shopId = 21843;

    public static string $method;
    public static array $params;

    public static function init(string $method, array $params): array
    {
        static::$method = $method;

        /** Процессинг тела */
        static::$params = [
            'shopId' => self::$shopId,
            'nonce' => time(),
            'i' => $params['i'],
            'email' => Auth::user()->email,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'amount' => $params['amount'],
            'currency' => 'RUB',
        ];

        return (array) self::request();
    }

    public static function request(): array
    {
        $ch = curl_init(static::$url . static::$method);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(self::prepareBody(static::$params)));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $exec = json_decode(curl_exec($ch), true);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return [
            'status' => $code,
            'body' => $exec
        ];
    }

    public static function prepareBody(): array
    {
        // Сортируем в алфавитном порядке
        ksort(static::$params);

        // Генерируем подпись
        $sign = hash_hmac('sha256', implode('|', static::$params), static::$apiKey);

        // Вставляем подпись и возвращаем
        static::$params['signature'] = $sign;
        return static::$params;
    }
}
