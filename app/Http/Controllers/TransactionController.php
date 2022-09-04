<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Создать транзакцию в истории
     *
     * @param $type
     * @param $userId
     * @param $amount
     * @return void
     */
    public static function make($type, $userId, $amount)
    {
       Transaction::create([
           'type'    => $type,
           'user_id' => $userId,
           'amount'  => $amount,
       ]);
    }
}
