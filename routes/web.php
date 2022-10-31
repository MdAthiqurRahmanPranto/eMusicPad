<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegistrationController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\MusicianController;
use App\Http\Controllers\backend\PadcenterController;

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
    return view('frontend.homepage');
});

Route::get('/login-form', [LoginController::class, 'login'])->name('login.form');

Route::get('/registration-form', [RegistrationController::class, 'registration'])->name('registration.form');

// ---Backend---

Route::get('/admin', [AdminController::class, 'Admin'])->name('adminpanel');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/musician', [MusicianController::class, 'musicians'])->name('musicians');
Route::get('/musician-form', [MusicianController::class, 'form'])->name('musician.form');
Route::post('/musician-create', [MusicianController::class, 'create'])->name('musician.create');
Route::get('/musician-update-form/{id}', [MusicianController::class, 'updateForm'])->name('musician.update.form');
Route::put('/musician-update/{id}', [MusicianController::class, 'update'])->name('musician.update');
Route::get('/musician-delete/{id}', [MusicianController::class, 'delete'])->name('musician.delete');
Route::get('/musician-single/{id}', [MusicianController::class, 'singleView'])->name('musician.single');

Route::get('/padcenter', [PadcenterController::class, 'padcenter'])->name('padcenter');
