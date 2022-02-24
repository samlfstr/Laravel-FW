<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Models\Category;
use App\Models\Post;
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

//<editor-fold desc="_Main Page">

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

Route::get('/math', function () {
    return view('math');
});

Route::get('/react', function () {
    return view('react');
});

Route::get('/todolist', function () {
    return view('todolist');
});

Route::get('/quiz', function () {
    return view('quiz');
});


Route::permanentRedirect('/here', '/to_there');


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'age'], function () {
    Route::get('/userName', [UsersController::class, 'show']);
});


//</editor-fold>

// wildcard variable should match with the functions slug
Route::get('/posts/{post}', function ($slug) {

    $post = Post::query()->where('slug', '=', $slug)->first();

    if (isset($post)) {
        return view('post')->with(
            [
                'post' => $post
            ]
        );
    } else {
        abort(404);
    }


    //<editor-fold desc="_Old Versions">


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
        ['post' => file_get_contents(__DIR__ . '/../resources/posts/first-post.html')]
    );
    */

    /* 0.2
    // use control + s to introduce a variable
    $post = file_get_contents(__DIR__ . '/../resources/posts/first-post.html');
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
    //</editor-fold>

    // the constrain of course takes the wild card variable
});


// return all the related posts to a category
Route::get('posts', function () {

    $posts = Post::all();

    return view('posts')->with([
        'posts' => $posts
    ]);
});

Route::get('posts/category/{category}', function ($category){
    $c_posts = Category::query()->where('name', '=', $category)->get();

    return view('categories')->with([
        'c_posts' => $c_posts
    ]);
});









