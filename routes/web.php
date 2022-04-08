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
    return view('HalamanBeranda');
});

Route::get('/HalamanBeranda', function () {
    return view('HalamanBeranda');
});

Route::get('/DosenTugasBelajar', function () {
    return view('HalamanDosenTugasBelajar');
});

Route::get('/HalamanProfil', function () {
    return view('HalamanProfil');
});

Route::get('/icon-feather', function () {
    return view('icon-feather');
});


