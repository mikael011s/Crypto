<?php

namespace App\Providers;

use App\Events\UserBalancePayedEvent;
use App\Events\UserRegisterEvent;
use App\Listeners\BalancePayListener;
use App\Listeners\UserRegisterListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            UserRegisterListener::class,
        ],

        UserBalancePayedEvent::class => [
            BalancePayListener::class,
        ],

//        UserRegisterEvent::class => [
//
//        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
