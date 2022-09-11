<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\Payok\ApiController;
use App\Http\Controllers\Merchant\ReferralPayController;
use App\Http\Requests\PayRequest;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function initPay(PayRequest $request)
    {
        $payment = $request->post('payment-system');

        if ($payment == 'freekassa')
            return \App\Http\Controllers\Api\Freekassa\ApiController::init('orders/create', ['i' => $request->post('freekassa_payment-system'), 'amount' => $request->post('col')]);
        elseif ($payment == 'referral_balance')
            return ReferralPayController::init($request->all());
        elseif ($payment == 'bank')
            return ApiController::init('', $request->all());
    }

    /**
     * Функция пока не используется. Очень спешил с разработкой. :3
     *
     * @param $payment
     * @return false|string[]
     */
    public function getMerchantObject($payment)
    {
        // Пополнение с реферального баланса. Возвращаем объект мерчанта
        if ($payment == 'referral_balance')
//            return ['orders/create', Merchant\];

        // Пополнение с фрикассы. Возвращаем объект мерчанта
        if ($payment == 'freekassa')
            return ['orders/create', App\Http\Controllers\Api\Payok\ApiController::class];

        // Если нет такого способа
        return false;
    }
}
