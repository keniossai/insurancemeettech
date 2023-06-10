<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Auth\Events\Login;

class UserEventSubscriber
{
    /**
     * Handle the login event.
     *
     * @param Login $event
     * @return void
     */
    public function handleLogin(Login $event)
    {
        User::withoutEvents(function () use ($event) {

            $event->user->increment('login_count', 1, array_merge(
                ['last_login' => now()], $event->user->registered_at ? [] : ['registered_at' => now()]
            ));
        });
    }
}
