<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{



    public function retrieved(User $user)
    {
        echo "retrieved";
        var_dump($user->name);
    }

    public function created(User $user)
    {
        echo "created";
        var_dump($user);
    }
}
