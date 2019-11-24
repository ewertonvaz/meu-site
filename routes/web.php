<?php

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

Route::get('/', ['as' => 'root', function () {
    return view('index');
}]);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/page01', function () {
    return view('page01', ["meunome" => "Ewerton"]);
});

Route::get('/page02', function () {
    $nomes = array('Maria', 'João', 'Ana', 'Jorge');
    return view('page02', ['nomes' => $nomes]);
});