<?php

namespace Http\Controllers\Api\Freekassa;

use App\Http\Controllers\Api\Freekassa\ApiController;
use PHPUnit\Framework\TestCase;

class ApiControllerMakeOrderTest extends TestCase
{

    public function testRequest()
    {
        $apiResponse = ApiController::init('orders/create', [
            'shopId' => ApiController::$shopId,
            'nonce' => time(),
            'paymentId' => 1,
            'i' => 4,
            'email' => 'gapurovich05@mail.ru',
            'ip' => '176.15.139.249',
            'amount' => 1000,
            'currency' => 'RUB',
        ]);

        $this->assertEquals(200, $apiResponse['status']);
    }
}
