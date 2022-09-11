<?php

namespace App\Helpers\Contracts\Postback;

use App\Http\Controllers\Merchant\PostbackController;
use Illuminate\Http\Request;

abstract class ServicePostbackController extends PostbackController {
    /**
     * Все переменные от платёжной системы
     * @var array
     */
    public array $data;

    /**
     * Процесс пополнения баланса пользователя
     * @param Request $request
     * @return mixed
     */
    abstract public function pay(Request $request);

    /**
     * Подготовка массива. Привести в нужный вид
     * @return array
     */
    abstract protected function prepare(): array;
}
