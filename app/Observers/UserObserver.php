<?php

namespace App\Observers;

use App\Models\User;
use App\Notifications\UserCreatedNotification;
use App\Notifications\UserDeletedNotification;
use App\Notifications\UserUpdatedNotification;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        $user->notify(new UserCreatedNotification($user));
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        $user->notify(new UserUpdatedNotification($user));
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        $user->notify(new UserDeletedNotification($user));
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
