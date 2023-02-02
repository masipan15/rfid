<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SiswaController;

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

Route::get('/sekolah', [SekolahController::class, 'index'])->name('sekolah');
Route::get('/tambah_sekolah', [SekolahController::class, 'tambah'])->name('tambah_sekolah');
Route::post('/insert_sekolah', [SekolahController::class, 'insert'])->name('insert_sekolah');
Route::get('/edit_sekolah/{id}', [SekolahController::class, 'edit'])->name('edit_sekolah');
Route::post('/update_sekolah/{id}', [SekolahController::class, 'update'])->name('update_sekolah');
Route::get('/delete_sekolah/{id}', [SekolahController::class, 'delete'])->name('delete_sekolah');



Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/tambah_siswa', [SiswaController::class, 'tambah'])->name('tambah_siswa');
Route::post('/insert_siswa', [SiswaController::class, 'insert'])->name('insert_siswa');
Route::get('/edit_siswa/{id}', [SiswaController::class, 'edit'])->name('edit_siswa');
Route::post('/update_siswa/{id}', [SiswaController::class, 'update'])->name('update_siswa');
Route::get('/delete_siswa/{id}', [SiswaController::class, 'delete'])->name('delete_siswa');
