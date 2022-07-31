<?php

namespace App\Models;

use App\Events\Comment\Updated;
use App\Observers\CommentObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

//    protected $dispatchesEvents = [
//        'updated' => Updated::class,
//    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

   // public static function boot()
   // {
     //   parent::boot();

    //    static::setEventDispatcher( new \Illuminate\Events\Dispatcher() );

    //    static::observe(new CommentObserver());
  //  }
}
