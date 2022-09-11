<?php

namespace App\Http\Controllers\Api\Freekassa;

use App\Helpers\Contracts\Postback\ServicePostbackController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Merchant\PostbackController;
use Illuminate\Http\Request;

class PayokPostbackController extends ServicePostbackController
{
    public array $data;

    public function pay(Request $request)
    {
        $this->data = $request->all();
        $this->payUserBalance($this->prepare());
    }

    protected function prepare(): array
    {
        return [
            'P_EMAIL' => $this->data['email'],
            'AMOUNT' => $this->data['amount'],
        ];
    }
}
