<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/postregister', [AuthController::class, 'postregister']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/downloadpdf',[MahasiswaController::class, 'downloadpdf']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);

Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/{id}/update', [MahasiswaController::class, 'update']); // Using PUT method for updating
Route::delete('/mahasiswa/{id}/delete', [MahasiswaController::class, 'destroy']); // Using DELETE method for deleting

Route::get('/mahasiswa/search', [MahasiswaController::class, 'search'])->name('mahasiswa.search');

Route::get('/mahasiswa/dosen', [MahasiswaController::class, 'dosen']);
Route::get('/mahasiswa/matkul', [MahasiswaController::class, 'matkul']);
