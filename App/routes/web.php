<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
});

/*
|--------------------------------------------------------------------------
| Eager Load
|--------------------------------------------------------------------------
| Model::with(['<relation_names>',' '...])->get();
| With that we are limiting the number of times we send request
| to the database, it is a very important thing to bear in mind
| But there is an eaiser way to solve the n + 1 problem, it's to use
| the models default protected $with variable.
|
*/
Route::get('posts', function () {

    DB::listen(function ($query) {
        logger($query->sql);
    });


    $posts = Post::all();

    return view('posts')->with([
        'posts' => $posts
    ]);
});

Route::get('category/{category}', function ($category) {
    $category = Category::query()->where('name', '=', $category)->get();
    return view('categories')->with([
        'category' => $category
    ]);
});

Route::get('author/{author}', function ($author) {
    $authors = Author::getBySlugName($author);

    return view('post')->with([
        'author' => $authors
    ]);

});





