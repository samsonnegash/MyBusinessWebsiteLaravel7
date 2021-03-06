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
    return view('index');
});

Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/user/{name}', function ($name) {
    
    return "Hello " .$name." this is your page";

    
});

Route::get('/about', function () {
    return view ('auth.about' ,[ 'name'=> request('name') ,'age' => request('age')]);
});
