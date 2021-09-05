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
    $comics = config('comics');
    return view('home', [
        'comics' => $comics
    ]);
})->name('home');

Route::get('/prodoct/{id}', function ($id) {
    $id -= 1;
    $comics = config('comics');
    return view('prodot-1',[
        'id' => $id,
        'comics' => $comics
    ]);
})->name('prodotto-1');
