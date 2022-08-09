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

    public function updateRate()
    {
        // Выделяем значения
        $min = Setting::where('param', 'currency_up_min')->first();
        $max = Setting::where('param', 'currency_up_max')->first();
        $currentRate = Setting::where('param', 'rau_price')->first();

        // Генерируем случайное число в диапазоне
        $upPercent = rand($min->value, $max->value);

        Setting::where('param', 'rau_price')->update([
            'value' => round($currentRate->value + (($upPercent / 100) * $currentRate->value))
        ]);

        DB::table('rau_histories')->insert([
            'old_price' => $currentRate->value,
            'new_price' => round($currentRate->value + (($upPercent / 100) * $currentRate->value)),
            'up_percent' => $upPercent,
        ]);
    }
}
