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
    public function payUserBalance(Request $request): int
    {
//        $this->checkSign($request);
        event(new UserBalancePayedEvent($request->all()));

        $user = User::where('email', $request->post('P_EMAIL'))->first();
        $userNewBalance = $user->balance + ConverterController::convertToRau($request->post('AMOUNT'));

        User::where('email', $request->post('P_EMAIL'))->update([
            'balance' => $userNewBalance
        ]);

        return $userNewBalance;
    }

    private function checkSign($request): void
    {
        $sign = md5($request->post('MERCHANT_ID').':'.$request->post('AMOUNT').':ezGke.jo/QZNp)c:'.$request->post('MERCHANT_ORDER_ID'));

        if ($sign !== $request->post('SIGN')) {
            exit ('403');
        }
    }
}
