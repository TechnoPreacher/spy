<?php

namespace App\Providers;

use App\Listeners\Comment\UpdatedEvent;
use App\Models\Comment;

use App\Models\User;
use App\Observers\CommentObserver;


use App\Observers\UserObserver;
use Illuminate\Database\Events\QueryExecuted;
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
    //    $this->app->bind('EloquentSpy', function ($app) {
      //      return new EloquentSpy();
       // });

//
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

        User::observe(UserObserver::class);//НН
        Comment::observe(CommentObserver::class);//НН

        // публикация файла конфига config.php из недр пакета внутрь приложения app/config/spy --> php artisan vendor:publish
        //$this->publishes([
        //__DIR__.'/../config/config.php' => config_path('spy.php'),
        //]);



//        Event::listen(
//            Comment::class,
//            [EloquentSpy::class, 'handle']
//        );

       //Comment::observe(CommentObserver::class);
//
   Event::listen('*QueryExecuted*', function ($eventName, array $data) {
            echo $eventName; echo '<br>';
        });


//     1   Event::listen(
//            QueryExecuted::class,
//            [CommentObserver::class, 'handle']
//        );



//    2       Event::listen('*eloquent*', function ($eventName, array $data) {
//            echo $eventName; echo '<br>';
//var_dump($data);
//                echo '<br>';
//            });


//var_dump( $data);
//            try { //echo json_encode($data[0]);
//                foreach ($data[0] as $k => $v) {
//                    echo json_encode($v);
//                    echo '<br>';
//
//                }
//
//                echo 'd';
//                //    echo json_encode($data[0][0]);
//            } catch (Exception $e) {
//                echo 'Выброшено исключение: ', $e->getMessage(), "\n";
//            }



         //  print_r($data);
            // echo(json_encode($data->bindings));


 //       Comment::observe(CommentObserver::class);

    }
}
