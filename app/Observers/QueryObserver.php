<?php

namespace App\Observers;


use Illuminate\Database\Events\QueryExecuted;

class QueryObserver
{


    public function handle(QueryExecuted $comment)
    {
        echo "handle event ".get_class($comment).'<br>';
        var_dump($comment->sql);
        echo '<br>';
        var_dump($comment->bindings);
        echo '<br>';
    }



}
