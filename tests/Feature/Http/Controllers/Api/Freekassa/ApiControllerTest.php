<?php

namespace Http\Controllers\Api\Freekassa;

use App\Http\Controllers\Api\Freekassa\ApiController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Event;
use PHPUnit\Framework\TestCase;

class ApiControllerTest extends TestCase
{
    public function testRequest() // Тест получения списка заказов
    {
        $apiResponse = ApiController::request('orders', [
            'shopId' => ApiController::$shopId,
            'nonce' => time(),
        ]);

        $this->assertEquals(200, $apiResponse['status']);
    }
}
