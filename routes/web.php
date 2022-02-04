<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "active" => "Home",
        "title" => "Home | Pemrograman Web 1"
    ]);
});

Route::get('/galery', function () {
    return view('galery', [
        "active" => "Galery",
        "title" => "Galery | Pemrograman Web 1"
    ]);
});

Route::get('/bukutamu', function () {
    return view('bukutamu', [
        "active" => "Buku Tamu",
        "title" => "Buku Tamu | Pemrograman Web 1"
    ]);
});

Route::get('admin', function() {
    return view('admin', [
        "name" => "Dharma Situmorang",
        "active" => "Dashboard",
        "title" => "Dashboard | Pemrograman Web 1"
    ]);
});

Route::get('/profile', [HomeController::class, 'index']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/matakuliah', [MataKuliahController::class, 'index']);
