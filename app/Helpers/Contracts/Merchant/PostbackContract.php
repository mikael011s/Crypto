<?php

namespace App\Helpers\Contracts\Merchant;

use Illuminate\Http\Request;

interface PostbackContract
{
    /**
     * Пополнить баланс пользователя
     *
     * @param Request $request
     * @return int
     */
    public function payUserBalance(Request $request): int;
}
