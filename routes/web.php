<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\frontend\AuthController;
use App\Http\Controllers\backend\MusicianController;
use App\Http\Controllers\backend\ScheduleController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\PadcenterController;
use App\Http\Controllers\backend\InstrumentController;
use App\Http\Controllers\Frontend\MusicianHomepageController;


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


//---Frontend---

Route::get('/', function () {
    return view('frontend.homepage');
})->name('homepage');

Route::get('/login', [AuthController::class, 'ShowLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'ProcessLogin'])->name('dologin');

Route::get('/registration',[AuthController::class, 'ShowRegistrationForm'])->name('registration');
Route::post('/registration',[AuthController::class, 'ProcessRegistration']);


Route::get('/profile', [AuthController::class, 'showProfile'])->name('profile');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/musician/homepage', [MusicianHomepageController::class, 'index'])->name('musician.homepage');
Route::get('Booking', [BookingController::class, 'booking'])->name('booking.form');

// ---Backend---

Route::get('/admin', [AdminController::class, 'Admin'])->name('adminpanel');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/musician', [MusicianController::class, 'musicians'])->name('musicians');
Route::get('/musician-form', [MusicianController::class, 'form'])->name('musician.form');
Route::post('/musician-form/store',[MusicianController::class,'store'])->name('musician.form.store');


Route::get('/padcenter', [PadcenterController::class, 'padcenter'])->name('padcenter');
Route::get('/padcenter-form',[PadcenterController::class,'list'])->name('padcenter-form');
Route::post('padcenter/store', [PadcenterController::class, 'store'])->name('padcenter.store');

Route::get('/instrument', [InstrumentController::class, 'instrument'])->name('instrument');
Route::get('/instrument-list', [InstrumentController::class, 'list'])->name('instrument.list');
Route::post('/instrument-list/store', [InstrumentController::class, 'store'])->name('instrument.store');

Route::get('/schedule', [ScheduleController::class, 'list'])->name('schedule.list');
Route::get('/schedule/form', [ScheduleController::class, 'create'])->name('schedule.create');
Route::post('/schedule/store', [ScheduleController::class, 'store'])->name('schedule.store');
