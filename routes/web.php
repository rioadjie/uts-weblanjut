<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/beranda',[BerandaController::class, 'index']) -> name('beranda');
Route::get('/data-mahasiswa',[MahasiswaController::class, 'index']) -> name('data-mahasiswa');
Route::get('/create-mahasiswa',[MahasiswaController::class, 'create']) -> name('create-mahasiswa');
Route::post('/simpan-data',[MahasiswaController::class, 'store']) -> name('simpan-data');
Route::get('/edit-mahasiswa/{id}',[MahasiswaController::class, 'edit']) -> name('edit-mahasiswa');
Route::post('/update-mahasiswa/{id}',[MahasiswaController::class, 'update']) -> name('update-mahasiswa');
Route::get('/delete-mahasiswa/{id}',[MahasiswaController::class, 'destroy']) -> name('delete-mahasiswa');