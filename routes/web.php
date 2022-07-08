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


// route basic
Route::get('/', function () {
    return view('welcome');
});


Route::get('/belajar', function(){
    echo '<center><h1><u>HALO SEMUANYA</u></h1><br>';
    echo '<h1><u>Kami sedang belajar laravel dasar</u></h1>';
});


// route basic lanjut ke view

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/create', function () {
    return view('pages.create');
});

Route::get('/delete', function () {
    return view('pages.delete');
});

// route parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{kelas}/{hobby}', function ($a, $b, $c, $d, $e, $f) {
    return view('pages.biodata', compact('a','b','c', 'd', 'e', 'f'));
});

// route optional parameter
Route::get('/pesanan/{makanan?}', function ($a = "Pesanan Kosong") {
    return view('pages.pesanan', compact('a'));
});