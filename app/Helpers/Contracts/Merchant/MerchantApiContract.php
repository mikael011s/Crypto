<?php

namespace App\Helpers\Contracts\Merchant;

interface MerchantApiContract
{
    /**
     * Запрос к API.
     * Необходимо возвращать массив полученных данных.
     *
     * @param string $method
     * @param array $params
     * @return array
     */
    public static function init(string $method, array $params): array;

    public static function request(): array;

    /**
     * Подготовка тела запроса.
     *
     * @return array
     */
    public static function prepareBody(): array;
}
