<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//Route::get('/show', function () {
  //  return view('comments/show');
//});


Route::name('comment.')->group(function () {
    Route::controller(CommentController::class)->group(function () {

        Route::get('/reg', 'Reg')->name('Reg');
        Route::post('/store', 'Store')->name('Store');

        Route::get('/show', "Show")->name('Show');
        Route::post('/update', "Update")->name('Update');

        Route::post('/auth', "textAuthentication")->name('textAuth');;
        Route::delete('/del', "textDeletion")->name('textDel');
    });
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
