<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

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
Route::get('/editsekolah/{id}', [SekolahController::class, 'edit'])->name('editsekolah');
Route::post('/update_sekolah/{id}', [SekolahController::class, 'update'])->name('update_sekolah');
Route::get('/delete_sekolah/{id}', [SekolahController::class, 'delete'])->name('delete_sekolah');
