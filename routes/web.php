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
Route::get('/pesanan/{makanan?}/{makan?}', function ($a = "Pesanan Kosong",$b = "Pesanan Kosong") {
    return view('pages.pesanan', compact('a','b'));
});

// passing data dari controller ke view
use App\Http\Controllers\PengenalanController;
Route::get('/pengenalan', [App\Http\Controllers\PengenalanController::class,'pengenalan']);

// passing data dinamis(route parameter) dari controller ke view
Route::get('/intro/{nama}/{alamat}/{umur}', [PengenalanController::class,'intro']);

Route::get('/siswa', [PengenalanController::class,'siswa']);

use App\Http\Controllers\LatihanController;
Route::get('/menu', [LatihanController::class,'menu']);
Route::get('/dosen', [LatihanController::class,'dosen']);
Route::get('/siaran', [LatihanController::class,'siaran']);

use App\Http\Controllers\PostController;
Route::get('/index', [PostController::class,'index']);

// 3 table
use App\Http\Controllers\TabelSiswa;
Route::get('/siswa', [TabelSiswa::class,'siswa']);

use App\Http\Controllers\TabelPeserta;
Route::get('/peserta', [TabelPeserta::class,'peserta']);

use App\Http\Controllers\TabelMapel;
Route::get('/mapel', [TabelMapel::class,'mapel']);

use App\Http\Controllers\PengunjungController;
Route::get('/allinone', [PengunjungController::class,'pengunjung']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// route siswa
Route::resource('siswa', SiswaController::class);

Auth::routes();
use App\Http\Controllers\SlotController;
Route::resource('slot', SlotController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
