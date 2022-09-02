<?php

namespace Http\Controllers\Merchant;

use App\Http\Controllers\Merchant\ConverterController;
use Tests\TestCase;

class ConverterControllerTest extends TestCase
{
    public function testConvertToRuble()
    {
        $convertController = new ConverterController();

        $rate = $convertController->convertToRuble(2);
        $this->assertEquals(136, $rate);
    }

    public function testCurrentRateOnRuble()
    {
        $convertController = new ConverterController();

        $rate = $convertController->currentRateOnRuble();
        $this->assertEquals(68, $rate);
    }

    public function testConvertToRau()
    {
        $convertController = new ConverterController();

        $rate = $convertController->convertToRau(150);
        $this->assertEquals(2.2058823529412, $rate);
    }
}
