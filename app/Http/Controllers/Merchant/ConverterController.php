<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RauCoinController;
use App\Models\Setting;
use Illuminate\Http\Request;

class ConverterController extends Controller
{
    /**
     * Получить текущий курс RAu
     * @return mixed
     */
    public static function currentRateOnRuble()
    {
        $rauController = new RauCoinController();
        return $rauController->getRate();
    }

    /**
     * Конвертировать рау в рубли
     * @param $rau
     * @return float|int
     */
    public static function convertToRuble($rau)
    {
        return $rau * self::currentRateOnRuble();
    }

    /**
     * Конвертировать рубли в рау
     * @param $ruble
     * @return float|int
     */
    public static function convertToRau($ruble)
    {
        return $ruble / self::currentRateOnRuble();
    }
}
