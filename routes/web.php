<?php

use App\Http\Controllers\announcementController;
use App\Http\Controllers\faqsController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UsersCalendarController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\formController;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Auth\Events\Logout;
use Illuminate\Routing\RouteRegistrar;
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
    return view('index');
});

// Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
// Route::get('/registration',[CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');

//Login and Registraion
Route::post('/registration-user',[CustomAuthController::class,'registerUser'])->name('registration-user');  
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard']);
Route::get('/logout',[CustomAuthController::class,'logout']);
Route::post('/dashboard', [CustomAuthController::class, 'updateProfile'])->name('updateProfile');


//Set up form controlls
Route::get('/create',[formController::class,'create'])->name('create');
Route::post('/create-form',[formController::class,'createForm'])->name('create-form');    
Route::get('dashboard/edit/{id}',[formController::class,'edit']);
Route::put('dashboard/update/{id}',[formController::class,'update']);
Route::get('dashboard/delete/{id}',[formController::class,'delete']);
Route::get('dashboard/admin',[formController::class,'getAllForm'])->name('dashboard');

//Appointments and Bookings
//User Dashboard - show appointments
Route::get('/dashboard',[CustomAuthController::class,'appointment'])->name('appointment');
//Set up bookings
Route::post('/bookAppointment',[CustomAuthController::class,'bookAppointment'])->name('bookAppointment');
//Show Bookings
Route::get('/bookings', [CustomAuthController::class, 'bookings'])->name('appointment.showBookings');

//Working in announcements
 Route::get('/announcement',[announcementController::class,'index'])->name('announcement');
 Route::get('/faqs',[faqsController::class,'index'])->name('faqs');


//Testing area





