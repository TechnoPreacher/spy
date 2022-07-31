<?php

namespace App\Observers;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Events\QueryExecuted;

class CommentObserver
{
    /**
     * Handle the Comment "created" event.
     *
     * @param  \App\Models\Comment  $comment
     * @return void
     */
    public function created(Comment $comment)
    {
        echo "==created ";
        echo '<br>';
    }

    /**
     * Handle the Comment "updated" event.
     *
     * @param  \App\Models\Comment  $comment
     * @return void
     */
    public function updated(Comment $comment)
    {
        echo "==updated ";
        echo '<br>';
    }

    /**
     * Handle the Comment "deleted" event.
     *
     * @param  \App\Models\Comment  $comment
     * @return void
     */
    public function deleted(Comment $comment)
    {
        echo "==deleted ";
        echo '<br>';
    }

    /**
     * Handle the Comment "restored" event.
     *
     * @param  \App\Models\Comment  $comment
     * @return void
     */
    public function restored(Comment $comment)
    {
        echo "==restored ";
        echo '<br>';
    }

    /**
     * Handle the Comment "force deleted" event.
     *
     * @param  \App\Models\Comment  $comment
     * @return void
     */
    public function forceDeleted(Comment $comment)
    {
        echo "==forceDeleted ";
        echo '<br>';
    }


    public function retrieved(Comment $comment)
    {
        echo "==retrieved comment ";  echo '<br>';
    //    var_dump($comment->text); echo '<br>';echo '<br>';
    }

    public function saving(Comment $comment)
    {
        echo "s==aving comment ".'<br>';
      //  var_dump($comment);
        //echo '<br>';echo '<br>';
    }

    public function saved(Comment $comment)
    {
        echo "==saved comment ".'<br>';
        //var_dump($comment);
        echo '<br>';echo '<br>';
    }


    public function handle(QueryExecuted $event)
    {


        var_dump( $event->sql);
      //  var_dump( $event->bindings);

        echo '<br>';
    }
}
