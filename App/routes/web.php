<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get("/", function () {
    return redirect('main');
});

Route::get('/bg', function () {
    return view('bg_color');
});

Route::get('/exc', function () {
    return view("routing")
        ->with(["name" => "Taylor"]);
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
    return view('test')
        ->with(['name' => 'Samuel']);
});

Route::get('/main ', function () {
    return view('main');
});

Route::get('/greeting', function () {
    return 'Hello world';
});

Route::get('/data', function () {
    return view('dataStructures');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/async', function () {
    return view('async');
});

// {post} this notation is called wild card
// and the $slug variable is what ever the {post} is
// this path information comes from an <a> tag
Route::get('/posts/{post}', function ($slug) {

    // First try to describe what you are trying to do, then look at your code
    // if your code doesn't look like that then transform it into that

    // Here instead of having all these code here, we can create a class model to handle all for us

    $post = Post::find($slug);

    return view('post') -> with(
        [
            'post' => $post
        ]
    );


    /*$path = __DIR__ . "/../resources/posts/$slug.html";

    if(!file_exists($path)){
        // dd('The file doesn\'t exists');
        abort(404);
    }

    // $post = file_get_contents($path);
    // it takes two parameters, what's it's unique key and how long after it should be re-executed
    $post = cache()->remember("posts/$slug.html", now()->addSeconds(5), function() use ($path) {
        var_dump('file_get_contents');
        return file_get_contents($path);
    });*/



    /* 0.1
    return view('post') -> with( // Hard coding using __DIR__ returns always the first post
        ['post' => file_get_contents(__DIR__ . '/../resources/posts/first_post.html')]
    );
    */

    /* 0.2
    // use control + s to introduce a variable
    $post = file_get_contents(__DIR__ . '/../resources/posts/first_post.html');
    return view('post') -> with( // Hard coding using __DIR__ returns always the first post
        [
            'post' => $post
        ]
    );*/

    /* 0.3
        We can use slugs to pass what everwe want from url,
        for e.g. we could've accesed the file with the file who'll be provided from url
    Route::get('/posts/{post}', function ($slug) {
    return $slug;
     */


    // the constrain of course takes the wild card variable
})->whereAlphaNumeric('post');

Route::permanentRedirect('/here', '/to_there');


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'age'], function () {
    Route::get('/userName', [UsersController::class, 'show']);
});
