<?php

namespace App\Listeners;

use App\Models\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserRegisterListener
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
     * @param object $event
     * @return void
     */
    public function handle(object $event)
    {
        $user = $event->user;

        Notification::create([
            'user_id' => $user->id,
            'type' => 'text',
            'text' => 'Вас приветствует компания MIKE GROUP, благодарим за доверие к нашему проекту! С нами Вы получите гарантированный доход!',
        ]);
    }
}
