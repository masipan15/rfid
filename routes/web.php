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
})->middleware('auth');

Route::get('tes', function () {
    return view('tes');
})->middleware('auth');


Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::get('/maintenance', function () {
    return view('maintenance');
})->middleware('auth');


//Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Halaman Sekolah


//


Route::get('/sekolah', [SekolahController::class, 'index'])->name('sekolah')->middleware('auth');
Route::get('/tambah_sekolah', [SekolahController::class, 'tambah'])->name('tambah_sekolah')->middleware('auth');
Route::post('/insert_sekolah', [SekolahController::class, 'insert'])->name('insert_sekolah')->middleware('auth');
Route::get('/edit_sekolah/{id}', [SekolahController::class, 'edit'])->name('edit_sekolah')->middleware('auth');
Route::post('/update_sekolah/{id}', [SekolahController::class, 'update'])->name('update_sekolah')->middleware('auth');
Route::get('/delete_sekolah/{id}', [SekolahController::class, 'delete'])->name('delete_sekolah')->middleware('auth');


//Halaman Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa')->middleware('auth');
Route::get('/tambah_siswa', [SiswaController::class, 'tambah'])->name('tambah_siswa')->middleware('auth');
Route::post('/insert_siswa', [SiswaController::class, 'insert'])->name('insert_siswa')->middleware('auth');
Route::get('/edit_siswa/{id}', [SiswaController::class, 'edit'])->name('edit_siswa')->middleware('auth');
Route::post('/update_siswa/{id}', [SiswaController::class, 'update'])->name('update_siswa')->middleware('auth');
Route::get('/delete_siswa/{id}', [SiswaController::class, 'delete'])->name('delete_siswa')->middleware('auth');
Route::get('/delete_siswa/{id}', [AbsenController::class, 'delete'])->name('delete_siswa')->middleware('auth');


//Rekap Absen
Route::get('/rekap', [RekapController::class, 'index'])->name('rekap');
Route::post('/insert_rekap', [RekapController::class, 'insert'])->name('insert_rekap')->middleware('auth');

Route::get('/scan', [AbsenController::class, 'scan'])->name('scan');


Route::get('/absen', [AbsenController::class, 'absen'])->name('absen');
