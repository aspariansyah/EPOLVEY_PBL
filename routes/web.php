<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('login', [LoginController::class, 'showLoginForm'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware(['auth','role:Admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])
        ->name('admin.dashboard');

    Route::get('/create-survey', [AdminController::class, 'create_survey'])
        ->name('admin.create_survey');

    Route::get('/result-survey', [AdminController::class, 'result_survey'])
        ->name('admin.result_survey');

    Route::get('/manage-accounts', [AdminController::class, 'manage_accounts'])
        ->name('admin.manage_accounts');
});

Route::prefix('dosen')->middleware(['auth','role:Dosen'])->group(function () {
    Route::get('/dashboard', [DosenController::class, 'index'])
        ->name('dosen.dashboard');

    Route::get('/result', [DosenController::class, 'result'])
        ->name('dosen.result');

    Route::get('/result/detail', [DosenController::class, 'detail_result'])
        ->name('dosen.detail_result');

    Route::get('/profil', [DosenController::class, 'profil'])
        ->name('dosen.profil');
});

Route::prefix('mahasiswa')->middleware(['auth','role:Mahasiswa'])->group(function () {
    Route::get('/dashboard', [MahasiswaController::class, 'index'])
        ->name('mahasiswa.dashboard');

    Route::get('/survey', [MahasiswaController::class, 'survey'])
        ->name('mahasiswa.survey');

    Route::get('/profil', [MahasiswaController::class, 'profil'])
        ->name('mahasiswa.profil');
});
