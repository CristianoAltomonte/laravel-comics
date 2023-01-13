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

    return view('home', compact('comics'));
})->name('home');




Route::get('/comics', function () {

    return view('comics', compact('comics'));
})->name('index.comic');


Route::get('/comics/{key}', function ($key) {

    $comics = config('comics');

    if (is_numeric($key) && $key >= 0 && $key < count($comics)) {
        $prodotto_singolo = $comics[$key];
    } else {
        abort(404);
    }


    return view('show', compact('prodotto_singolo'));
})->name('show.comics');
