<?php

namespace App\Observers;

use App\Models\Comment;

class CommentObserver
{


    public function retrieved(Comment $comment)
    {
        echo "retrieved comment ".'<br>';
        var_dump($comment->text); echo '<br>';echo '<br>';
    }

    public function restoring(Comment $comment)
    {
        echo "restoring comment ".'<br>';
        var_dump($comment);echo '<br>';echo '<br>';
    }

    public function restored(Comment $comment)
    {
        echo "restored comment ".'<br>';
        var_dump($comment);echo '<br>';echo '<br>';
    }

    public function creating(Comment $comment)
    {
        echo "creating comment ".'<br>';
        var_dump($comment);echo '<br>';echo '<br>';
    }

    public function created(Comment $comment)
    {
        echo "created comment ".'<br>';
        var_dump($comment);echo '<br>';echo '<br>';
    }

    public function updating(Comment $comment)
    {
        echo "updating comment ".'<br>';
        var_dump($comment);echo '<br>';echo '<br>';
    }

    public function updated(Comment $comment)
    {
        echo "updated comment ".'<br>';
        var_dump($comment);echo '<br>';echo '<br>';
    }

    public function saving(Comment $comment)
    {
        echo "saving comment ".'<br>';
        var_dump($comment);echo '<br>';echo '<br>';
    }

    public function saved(Comment $comment)
    {
        echo "saved comment ".'<br>';
        var_dump($comment);echo '<br>';echo '<br>';
    }

    public function booting(Comment $comment)
    {
        echo "booting comment ".'<br>';
        var_dump($comment);echo '<br>';echo '<br>';
    }

    public function booted(Comment $comment)
    {
        echo "booted comment ".'<br>';
        var_dump($comment);echo '<br>';echo '<br>';
    }


    public function deleting(Comment $comment)
    {
        echo "deleting comment ".'<br>';
        var_dump($comment);echo '<br>';echo '<br>';
    }

    public function deleted(Comment $comment)
    {
        echo "deleted comment ".'<br>';
        var_dump($comment);echo '<br>';echo '<br>';
    }


}
