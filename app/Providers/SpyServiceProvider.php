<?php

namespace App\Providers;

use App\Models\Comment;

use App\Observers\CommentObserver;

use App\Services\EloquentSpy;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class SpyServiceProvider extends ServiceProvider
{




//    protected $listen = [
//        Comment::class => [
//            CommentObserver::class,
//        ],
//        ];

//    protected $observers = [
//        User::class => [UserObserver::class],
//    ];



    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //   var_dump(config('spy'));
        $this->app->bind('EloquentSpy', function ($app) {
            return new EloquentSpy();
        });


//      $this->app->singleton(EloquentSpy::class, function ($app) {
//           return new EloquentSpy();
//        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */

    public function boot()
    {
        // публикация файла конфига config.php из недр пакета внутрь приложения app/config/spy --> php artisan vendor:publish
        //$this->publishes([
        //__DIR__.'/../config/config.php' => config_path('spy.php'),
        //]);

        //User::observe('App\Observers\UserObserver');

     //  Comment::observe('App\Observers\CommentObserver');//так работало

//        Event::listen(
//            Comment::class,
//            [EloquentSpy::class, 'handle']
//        );

        Event::listen('*', function ($event) {
            echo $event; echo '<br>';
        });

    }
}
