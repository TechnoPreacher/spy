<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
protected $user;

    /**
     * @return mixed
     */

    public function retrieved(User $user)
    {
        echo "retrieved ".get_class($user);
     //   var_dump($user->name);
    }

    public function creating(User $user)
    {
        echo "creating ".get_class($user);
      //  var_dump($user);
    }

    public function created(User $user)
    {
        echo "created".get_class($user);
        //var_dump($user);
    }
    public function saved(User $user)
    {
        echo "saved".get_class($user);
       // var_dump($user);
    }

    public function saving(User $user)
    {
        echo "saving";
       // var_dump($user).get_class($user);
    }
}
