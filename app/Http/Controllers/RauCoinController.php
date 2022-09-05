<?php

namespace App\Http\Controllers;

use App\Models\RauHistory;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Helper\Table;

class RauCoinController extends Controller
{
    /**
     * Get coin rate
     * @return mixed
     */
    public function getRate()
    {
        return Setting::where('param', 'rau_price')->first()->value;
    }

    /**
     * Edit rate move range
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit(Request $request)
    {
        // Меняем мин. значение
        Setting::where('param', 'currency_up_min')->update([
            'value' => $request->post('min')
        ]);

        // Меняем макс. значение
        Setting::where('param', 'currency_up_max')->update([
            'value' => $request->post('max')
        ]);

        // Обратно с сообщением
        return Redirect::back()->with('success', 'Курс сохранён');
    }

    /**
     * Update coin rate
     * @return int
     */
    public function updateRate()
    {
        // Выделяем значения
        $min = Setting::where('param', 'currency_up_min')->first();
        $max = Setting::where('param', 'currency_up_max')->first();
        $currentRate = Setting::where('param', 'rau_price')->first();

        // Генерируем случайное число в диапазоне
        $percents = [
            0.2, 0.22, 0.24, 0.26, 0.28,
            0.3, 0.32, 0.34, 0.36, 0.38,
            0.4, 0.42, 0.44, 0.46, 0.48,
            0.5, 0.52, 0.54, 0.56, 0.58,
            0.6, 0.62, 0.64, 0.66, 0.68,
            0.7, 0.72, 0.74, 0.76, 0.78,
            0.8,
        ];
        $upPercent = $percents[rand(0, count($percents) - 1)];

        Setting::where('param', 'rau_price')->update([
            'value' => $currentRate->value + (($currentRate->value / 100) * $upPercent)
        ]);

        DB::table('rau_histories')->insert([
            'old_price' => number_format($currentRate->value, 2, '.', ''),
            'new_price' => number_format($currentRate->value + (($currentRate->value / 100) * $upPercent), 2, '.', ''),
            'up_percent' => number_format($upPercent, 2, '.', ''),
        ]);

        return $upPercent;
    }
}
