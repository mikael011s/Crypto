<?php

namespace Http\Controllers\Merchant;

use App\Http\Controllers\Merchant\PostbackController;
use Illuminate\Support\Facades\Session;
use PHPUnit\Framework\TestCase;

class PostbackControllerTest extends TestCase
{
    public function testPayUserBalance()
    {
        $response = $this->post(
            'post',
            '/api/payment',
            ['P_EMAIL' => 'gapurovich05@mail.ru', 'AMOUNT' => 100],
        );
    }
}
