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
        $percents = [0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8];
        $upPercent = $percents[rand(0, 6)];

        Setting::where('param', 'rau_price')->update([
            'value' => $currentRate->value + (($currentRate->value / 100) * $upPercent)
        ]);

        DB::table('rau_histories')->insert([
            'old_price' => $currentRate->value,
            'new_price' => round($currentRate->value + (($currentRate->value / 100) * $upPercent)),
            'up_percent' => $upPercent,
        ]);

        return $upPercent;
    }
}
