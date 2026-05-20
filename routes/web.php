<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'showlogin']);
Route::post('login', [AuthController::class, 'login']);

Route::get('register', [AuthController::class, 'showRegister']);
Route::post('register', [AuthController::class, 'register']);

//route admin
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.index');
    })->middleware('auth');

    Route::resource('/kategori', KategoriController::class);
    Route::resource('berita', BeritaController::class);
});

Route::post('/logout', [AuthController::class, 'logout']);