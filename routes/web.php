<?php

use Faker\Guesser\Name;
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

Route::get('/homepage', function () {
    $data = config('comics');
    return view('homepage', compact('data'));
})->name("homepage");


Route::get('/', function () {
    $data = config('comics');
    return view('partials.main', compact('data'));
})->name("main");