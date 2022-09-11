<?php

namespace Http\Controllers\Api\Payok;

use App\Http\Controllers\Api\Payok\ApiController;
use Tests\TestCase;

class ApiControllerTest extends TestCase
{
    public function testInit()
    {
        $response = ApiController::init('', [
            'col' => 1500,
        ]);

        $this->assertEquals('ssds', $response['body']['location']);
    }
}
