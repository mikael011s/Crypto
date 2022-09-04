<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferralPayController extends Controller
{
    public static function init($data)
    {
        if (Auth::user()->referral_balance < $data['col']) {
            return [
                'status' => 400,
                'body' => [
                    'error' => 'На реферальном счету недостаточно средств.',
                ]
            ];
        }

        User::where('id', Auth::id())->update([
            'referral_balance' => Auth::user()->referral_balance - $data['col'],
            'balance' => Auth::user()->balance + ConverterController::convertToRau($data['col']),
        ]);

        return [
            'status' => 200,
            'body' => [
                'success' => 'Оплата успешно проведена',
                'location' => route('m-wallet'),
            ]
        ];
    }
}
