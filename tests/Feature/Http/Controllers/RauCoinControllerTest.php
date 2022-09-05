<?php

namespace Http\Controllers;

use App\Http\Controllers\RauCoinController;
use Tests\TestCase;

class RauCoinControllerTest extends TestCase
{

    public function testUpdateRate()
    {
        $class = new RauCoinController();
        $this->assertEquals(!null, $class->updateRate());
    }
}
