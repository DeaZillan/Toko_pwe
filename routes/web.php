<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JualController;
use App\Http\Controllers\KeduaController;
use App\Http\Controllers\KeenamController;
use App\Http\Controllers\KelimaController;
use App\Http\Controllers\KetigaController;
use App\Http\Controllers\KeempatController;
use App\Http\Controllers\KetujuhController;
use App\Http\Controllers\PertamaController;
use App\Http\Controllers\KedelapanController;
use App\Http\Controllers\KesembilanController;

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

//route tanpa controller
Route::get('/Beranda', function () {
    echo ("Halaman Beranda");
});

Route::get('/profil', function () {
    echo ("Halaman Profil profil");
});

Route::get('/dea', function () {
    echo ("Halaman dea");
});

Route::get('/tiara', function () {
    echo ("Halaman profil tiara");
});

Route::get('/etri', function () {
    echo ("Halaman etri");
});

Route::get('/fathan', function () {
    echo ("Halaman fatan");
});

Route::get('/fay', function () {
    echo ("Halaman fay");
});

Route::get('/zillan', function () {
    echo ("Halaman zillan");
});

Route::get('/anggi', function () {
    echo ("Halaman anggi");
});

Route::get('/amel', function () {
    echo ("Halaman amel");
});

//route controller
Route::get('/jual', [JualController::class, 'dea']);

Route::get('/pertama', [PertamaController::class, 'dea']);

Route::get('/kedua', [KeduaController::class, 'dea']);

Route::get('/ketiga', [KetigaController::class, 'dea']);

Route::get('/keempat', [KeempatController::class, 'dea']);

Route::get('/kelima', [KelimaController::class, 'dea']);

Route::get('/keenam', [KeenamController::class, 'dea']);

Route::get('/ketujuh', [KetujuhController::class, 'dea']);

Route::get('/kedelapan', [KedelapanController::class, 'dea']);

Route::get('/kesembilan', [KesembilanController::class, 'dea']);