<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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
    return redirect('home');
});

Route::get('/main ', function () {
    return view('main');
});

Route::get('/greeting', function () {
    return 'Hello world';
});

Route::permanentRedirect('/here', '/to_there');


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'age'], function () {
    Route::get('/userName', [UsersController::class, 'show']);

    Route::get('/bg', function () {
        return view('bg_color');
    });

    Route::get('/exc', function () {
        return view("routing")->with(["name" => "Taylor"]);
    });

    Route::get('/bg', function () {
        return view('bg_color');
    });

    Route::get('/counter', function () {
        return view('counter');
    });

    Route::get('/reviews', function () {
        return view('reviews');
    });

    Route::get('/animate1', function () {
        return view('animate1');
    });

    Route::get('/modal', function () {
        return view('modal');
    });

    Route::get('/questions', function () {
        return view('questions');
    });

    Route::get('/todo', function () {
        return view('todo');
    });

    Route::get('/test', function () {
        return view('test');
    });

});
