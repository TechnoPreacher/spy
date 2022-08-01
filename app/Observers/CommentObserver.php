<?php

namespace App\Observers;

use App\Models\Comment;
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
        echo "created ".get_class($comment);
        echo '<br>';
    }
    public function creating(Comment $comment)
    {
        echo "creating ".get_class($comment);
        echo '<br>';
    }
    public function restoring(Comment $comment)
    {
        echo "restoring ".get_class($comment);
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
        echo "updated ".get_class($comment);
        echo '<br>';
    }
    public function updating(Comment $comment)
    {
        echo "updating ".get_class($comment);
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
        echo "deleted ".get_class($comment);
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
        echo "restored ".get_class($comment);
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

    }


    public function retrieved(Comment $comment)
    {
        echo "retrieved comment ".get_class($comment);  echo '<br>';
    //    var_dump($comment->text); echo '<br>';echo '<br>';
    }

    public function saving(Comment $comment)
    {
        echo "saving comment ".get_class($comment).'<br>';
      //  var_dump($comment);

    }

    public function saved(Comment $comment)
    {
        echo "==saved comment ".get_class($comment).'<br>';
        //var_dump($comment);

    }



}
