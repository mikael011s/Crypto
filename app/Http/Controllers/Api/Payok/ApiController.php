<?php

namespace App\Http\Controllers\Api\Payok;

use App\Helpers\Contracts\Merchant\MerchantApiContract;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller implements MerchantApiContract
{
    protected static string $url = 'https://api.freekassa.ru/v1/';
    protected static string $apiKey = 'D782D07CDF926A14A5E6B23DA15887F0-51BBDA474961B6D74062C71C8B0AFFF8-5632ABE46A704F51D060DD6697F30B33';
    protected static string $secret = 'b42e3533997d74fc4355cc85cac57862';

    public static int $keyId = 1251;
    public static int $projectId = 2405;

    public static string $method;
    public static array $params;
    public static string $sign;

    public static function init(string $method, array $params): array
    {
        static::$method = $method;

        /** Процессинг тела */
        static::$params = [
            'amount' => $params['col'],
            'payment' => time(),
            'shop' => self::$projectId,
            'currency' => 'RUB',
            'desc' => 'Название товара',
            'secret' => 'b42e3533997d74fc4355cc85cac57862', //Ваш секретный ключ
        ];

        self::$sign = md5 (implode('|', static::$params));

        return (array) self::request();
    }

    public static function request(): array
    {
        return [
            'status' => 200,
            'body' => [
                'success' => 'Оплата успешно проведена',
                'location' => self::prepareBody()['url'],
            ]
        ];
    }

    public static function prepareBody(): array
    {
        return [
            'url' => "https://payok.io/pay?amount=". self::$params['amount'] .
                     "&payment=". self::$params['payment'] ."&desc="
                     . self::$params['desc'] .
                     "&shop=". self::$params['shop'] ."&sign=". self::$sign ."&email=". 'gapurovich05@mail.ru' . "&userId=" . Auth::id()
        ];
    }
}
