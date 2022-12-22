<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DayController;
use App\Http\Controllers\backend\SlotController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\frontend\AuthController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\backend\MusicianController;
use App\Http\Controllers\backend\ScheduleController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\backend\ContactController as BackendContactController;
use App\Http\Controllers\frontend\InvoiceController;
use App\Http\Controllers\frontend\ProfileController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\PadcenterController;
use App\Http\Controllers\frontend\MusicpadController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\backend\AdminloginController;
use App\Http\Controllers\backend\InstrumentController;
use App\Http\Controllers\backend\BookingController as BackendBooking;



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
    return view('frontend.pages.homepage');
})->name('homepage');

Route::get('/login', [AuthController::class, 'ShowLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'ProcessLogin'])->name('dologin');

Route::get('/registration',[AuthController::class, 'ShowRegistrationForm'])->name('registration');
Route::post('/registration',[AuthController::class, 'ProcessRegistration']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/Musician/Profile', [ProfileController::class, 'showProfile'])->name('Profile');
Route::get('/Musician/Profile/edit/{id}', [ProfileController::class, 'editProfile'])->name('edit.profile');
Route::get('/Musician/Profile/update/{id}', [ProfileController::class, 'updateProfile'])->name('update.profile');


Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactSubmit'])->name('contact.submit');




Route::get('/musicpad', [MusicpadController::class, 'musicpad'])->name('musicpads');
Route::get('/musicpad-list', [MusicpadController::class, 'musicpadList'])->name('musicpads.list');
Route::get('/musicpad/singleView/{pancenter_id}', [MusicpadController::class, 'singleView'])->name('musicpads.singleview');

Route::get('/Booking/{padcenter_id}', [BookingController::class, 'booking'])->name('booking.form');
Route::post('/Booking/form/{padcenter_id}', [BookingController::class, 'ProcessBooking'])->name('booking.process');

// ssl commerze payment routes
Route::post('/pay/{id}', [SslCommerzPaymentController::class, 'index'])->name('paynow');

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::get('/invoice/{id}', [InvoiceController::class, 'invoice'])->name('invoice');






// ---Backend---


Route::get('/admin-login', [AdminloginController::class, 'ShowLoginForm'])->name('admin.login');
Route::post('/admin-login', [AdminloginController::class, 'ProcessLogin'])->name('do.login');
Route::get('/logout', [AdminloginController::class, 'logout'])->name('logout');


Route::group(['middleware'=>'auth'],function () 
{
    Route::group(['middleware' => ['CheckAdmin'],'prefix'=>'admin'], function () {
   
    
    Route::get('/', [AdminController::class, 'admin'])->name('adminpanel');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/musician', [MusicianController::class, 'musicians'])->name('musicians');
    Route::get('/musician-form', [MusicianController::class, 'form'])->name('musician.form');
    Route::get('/musician/delete/{id}', [MusicianController::class, 'deleteMusician'])->name('musician.delete');
    Route::post('/musician-form/store',[MusicianController::class,'store'])->name('musician.form.store');


    Route::get('/padcenter', [PadcenterController::class, 'padcenter'])->name('padcenter');
    Route::get('/padcenter-form',[PadcenterController::class,'list'])->name('padcenter-form');
    Route::post('padcenter/store', [PadcenterController::class, 'store'])->name('padcenter.store');
    Route::get('/padcenter/delect/{pancenter_id}',[PadcenterController::class,'delectPadcenter'])->name('padcenter.delect');
    Route::get('/padcenter/view/{pancenter_id}',[PadcenterController::class,'viewPadcenter'])->name('padcenter.view');
    Route::get('/padcenter/edit/{pancenter_id}',[PadcenterController::class,'editPadcenter'])->name('padcenter.edit');
    Route::put('/padcenter/update/{pancenter_id}',[PadcenterController::class,'updatePadcenter'])->name('padcenter.update');
    Route::post('/search-result',[PadcenterController::class,'search'])->name('search');

    Route::get('/instrument', [InstrumentController::class, 'instrument'])->name('instrument');
    Route::get('/instrument-list', [InstrumentController::class, 'list'])->name('instrument.list');
    Route::post('/instrument-list/store', [InstrumentController::class, 'store'])->name('instrument.store');
    Route::get('/instrument-list/delete/{id}', [InstrumentController::class, 'deleteInstrument'])->name('instrument.delete');


    Route::get('/slot', [SlotController::class, 'list'])->name('slot.list');
    Route::get('/slot/create', [SlotController::class, 'create'])->name('slot.create');
    Route::post('/slot/store', [SlotController::class, 'store'])->name('slot.store');

    Route::get('/days', [DayController::class, 'list'])->name('day.list');
    Route::get('/days/create', [DayController::class, 'create'])->name('day.create');
    Route::post('/days/store', [DayController::class, 'store'])->name('day.store');


    Route::get('/booking/table',[BackendBooking::class,'list'])->name('booking.list');
    Route::get('/booking/instrument/{id}',[BackendBooking::class,'inslist'])->name('booking.inslist');
    Route::get('/booking/table/status/yes/{booking_id}',[BackendBooking::class,'statusYes'])->name('booking.yes');
    Route::get('/booking/table/status/no/{booking_id}',[BackendBooking::class,'statusNo'])->name('booking.no');

    Route::get('/report',[ReportController::class,'list'])->name('report.list');
    Route::any('/report-submit',[ReportController::class,'list'])->name('report.list.submit');


    Route::get('/contact-list',[BackendContactController::class,'list'])->name('contact.list');



    
});
    });


