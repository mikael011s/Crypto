<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\Freekassa\ApiController;
use App\Http\Requests\PayRequest;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function initPay(PayRequest $request)
    {
        $payment = $this->getMerchantObject($request->post('payment-system'));

        return ApiController::init('orders/create', ['i' => $request->post('freekassa_payment-system'), 'amount' => $request->post('col')]);
    }

    public function getMerchantObject($payment)
    {
        if ($payment == 'freekassa')
            return ['orders/create', Api\Freekassa\ApiController::class];

        return Api\Freekassa\ApiController::class;
    }
}
