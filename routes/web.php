<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SekolahController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;

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
    return view('welcome');
});

Route::get('tes', function () {
    return view('tes');
});


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/maintenance', function () {
    return view('maintenance');
});


//Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Halaman Sekolah


//


Route::get('/sekolah', [SekolahController::class, 'index'])->name('sekolah');
Route::get('/tambah_sekolah', [SekolahController::class, 'tambah'])->name('tambah_sekolah');
Route::post('/insert_sekolah', [SekolahController::class, 'insert'])->name('insert_sekolah');
Route::get('/edit_sekolah/{id}', [SekolahController::class, 'edit'])->name('edit_sekolah');
Route::post('/update_sekolah/{id}', [SekolahController::class, 'update'])->name('update_sekolah');
Route::get('/delete_sekolah/{id}', [SekolahController::class, 'delete'])->name('delete_sekolah');


//Halaman Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/tambah_siswa', [SiswaController::class, 'tambah'])->name('tambah_siswa');
Route::post('/insert_siswa', [SiswaController::class, 'insert'])->name('insert_siswa');
Route::get('/edit_siswa/{id}', [SiswaController::class, 'edit'])->name('edit_siswa');
Route::post('/update_siswa/{id}', [SiswaController::class, 'update'])->name('update_siswa');
Route::get('/delete_siswa/{id}', [SiswaController::class, 'delete'])->name('delete_siswa');


//Rekap Absen
Route::get('/rekap', [RekapController::class, 'index'])->name('rekap');
Route::post('/insert_rekap', [RekapController::class, 'insert'])->name('insert_rekap');
Route::get('/edit_rekap/{id}', [RekapController::class, 'edit'])->name('edit_rekap');
Route::post('/update_rekap/{id}', [RekapController::class, 'update'])->name('update_rekap');
Route::get('/delete_rekap/{id}', [RekapController::class, 'delete'])->name('delete_rekap');


Route::get('/absen', [AbsenController::class, 'absen'])->name('absen');
Route::post('/proses_absen', [AbsenController::class, 'proses_absen'])->name('proses_absen');
