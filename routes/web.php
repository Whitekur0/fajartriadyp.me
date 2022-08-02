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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        'active' => 'home'
    ]);
});

Route::get('/control', function () {
    return view('control', [
        'active' => 'control'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'active' => 'about'
    ]);
});

