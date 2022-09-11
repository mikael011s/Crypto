<?php

namespace App\Helpers\Contracts\Merchant;

use Illuminate\Http\Request;

interface PostbackContract
{
    /**
     * Пополнить баланс пользователя
     *
     * @param $data
     * @return int
     */
    public function payUserBalance($data): int;
}
