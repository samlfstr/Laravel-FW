<?php

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

Route::get('/greeting', function () {
    return 'Hello world';
});

Route::permanentRedirect('/here','/to_there');

Route::get('/exc', function () {
    return view("routing")->with(["name" => "Taylor"]);
});

Route::get('/bg', function () {
    return view('bg_color');
});