<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news/{name?}', function ($name = "Autoliebhaber") {
    return view('news',
        ['name' => $name]);
   // return view('news');
   // return "<h1>test</h1>";
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/news', function () {
    return view('news');
});

Route::get('/most-wanted', function () {
    return view('most-wanted');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/newest-cars', function () {
    return view('newest-cars');
});

Route::get('/car-finder', function () {
    return view('car-finder');
});

Route::get('/part-finder', function () {
    return view('part-finder');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/my-profile', function () {
    return view('my-profile');
});

Route::get('/my-shop', function () {
    return view('my-shop');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/login', function () {
    return view('login');
});
