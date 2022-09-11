<?php

namespace App\Http\Controllers\Merchant;

use App\Events\UserBalancePayedEvent;
use App\Helpers\Contracts\Merchant\PostbackContract;
use App\Http\Controllers\Controller;
use App\Listeners\BalancePayListener;
use App\Models\User;
use Illuminate\Http\Request;

class PostbackController extends Controller implements PostbackContract
{
    public function payUserBalance($data): int
    {
        event(new UserBalancePayedEvent($data));

        $user = User::where('email', $data['P_EMAIL'])->first();
        $userNewBalance = $user->balance + ConverterController::convertToRau($data['AMOUNT']);

        User::where('email', $data['P_EMAIL'])->update([
            'balance' => $userNewBalance
        ]);

        return $userNewBalance;
    }

    private function checkSign($data): void
    {
        $sign = md5($data['MERCHANT_ID'].':'.$data['AMOUNT'].':ezGke.jo/QZNp)c:'.$data['MERCHANT_ORDER_ID']);

        if ($sign !== $data['SIGN']) {
            exit ('403');
        }
    }
}
