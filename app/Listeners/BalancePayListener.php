<?php

namespace App\Listeners;

use App\Events\UserBalancePayedEvent;
use App\Http\Controllers\Merchant\ConverterController;
use App\Http\Controllers\TransactionController;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BalancePayListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserBalancePayedEvent  $event
     * @return void
     */
    public function handle(UserBalancePayedEvent $event)
    {
        $data = $event->requestData;
        $user = User::where('email', $data['P_EMAIL'])->first();
        $referral = User::where('id', $user->referral_id)->first();

        TransactionController::make('pay', $user->id, $data['AMOUNT']);

        if ($referral !== null) {
            User::where('id', $user->referral_id)->update([
                'referral_balance' => $referral->referral_balance + (($data['AMOUNT'] / 100) * 10)
            ]);
            TransactionController::make('referral_pay', $referral->id, ($data['AMOUNT'] / 100) * 10);
        }
    }
}
