<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\announcementController;
use App\Http\Controllers\faqsController;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\AdminCheck;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UsersCalendarController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\formController;
use App\Http\Middleware\AlreadyLoggedIn;
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

Route::middleware([AuthCheck::class,AlreadyLoggedIn::class])->group(function () {
    Route::get('/dashboard', [CustomAuthController::class, 'appointment'])->name('appointment');
});

Route::middleware([AuthCheck::class, AdminCheck::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'adminRequestDashboard'])->name('admin.dashboard');
    Route::get('admin-message',[adminController::class,'adminMessage'])->name('admin-message');
    Route::get('admin-forms',[adminController::class,'adminForms'])->name('admin-forms');
    Route::get('admin-faqs',[adminController::class,'adminFaqs'])->name('admin-faqs');
    Route::get('admin-settings',[adminController::class,'adminSettings'])->name('admin-settings');
    Route::get('admin-announcement',[adminController::class,'adminAnnouncement'])->name('admin-announcement');
    Route::get('admin-request',[adminController::class,'adminRequest'])->name('admin-request');

    //Set up form controlls
    Route::get('admin/create',[formController::class,'create'])->name('create');
    Route::post('/create-form',[formController::class,'createForm'])->name('create-form');    
    Route::get('admin/dashboard/edit/{id}',[formController::class,'edit']);
    Route::put('admin/dashboard/update/{id}',[formController::class,'update']);
    Route::get('admin/dashboard/delete/{id}',[formController::class,'delete']);
  //  Route::get('admin/dashboard',[formController::class,'getAllForm'])->name('dashboard'); //pwde nani e delete
    Route::get('/bookings/{id}', [adminController::class, 'viewApp']);

    Route::get('admin/announcement',[announcementController::class,'createAnnouncement']);
    Route::post('admin/announcement-store',[announcementController::class,'storeAnnouncement'])->name('announcement-store');
    Route::post('/bookAppointment',[CustomAuthController::class,'bookAppointment'])->name('bookAppointment');
    
});


//Login and Registraion
Route::post('/registration-user',[CustomAuthController::class,'registerUser'])->name('registration-user');  
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
//Route::get('/dashboard',[CustomAuthController::class,'dashboard']);
Route::get('/logout',[CustomAuthController::class,'logout']);
Route::post('/updateProfile', [CustomAuthController::class, 'updateProfile'])->name('updateProfile');

//Route::get('/dashboard', [CustomAuthController::class, 'appointment'])->name('appointment');


// //Set up form controlls
// Route::get('admin/create',[formController::class,'create'])->name('create');
// Route::post('/create-form',[formController::class,'createForm'])->name('create-form');    
// Route::get('admin/dashboard/edit/{id}',[formController::class,'edit']);
// Route::put('admin/dashboard/update/{id}',[formController::class,'update']);
// Route::get('admin/dashboard/delete/{id}',[formController::class,'delete']);
// Route::get('admin/dashboard',[formController::class,'getAllForm'])->name('dashboard');
// Route::get('admin/dashboard/dashboard',[formController::class,'updateForm'])->name('updateForm');

//Appointments and Bookings
//User Dashboard - show appointments
//Route::get('/dashboard',[CustomAuthController::class,'appointment'])->name('appointment'); //Trying sa authentication
//Set up bookings
// Route::post('/bookAppointment',[CustomAuthController::class,'bookAppointment'])->name('bookAppointment');
//Show Bookings
Route::get('admin/bookings', [CustomAuthController::class, 'bookings'])->name('appointment.showBookings'); //pwde na e delete ni

//Working in announcements -> temporary

Route::get('/',[announcementController::class,'showAnnouncement'])->name('announcement');
Route::get('announcement',[announcementController::class,'dashboardAnnouncement'])->name('announcement.dashboard');
// Route::get('admin/announcement',[announcementController::class,'createAnnouncement']);
// Route::post('admin/announcement-store',[announcementController::class,'storeAnnouncement'])->name('announcement-store');


//faqs sa user side dapit -> temporary
 Route::get('/faqs',[faqsController::class,'index'])->name('faqs');


//Admin dashboard display routes
//Route::get('admin/dashboard/dashboard',[CustomAuthController::class,'adminDashboard']); //temporary admin-dashboard
// Route::get('admin-announcement',[adminController::class,'adminAnnouncement'])->name('admin-announcement');
// Route::get('admin-request',[adminController::class,'adminRequest'])->name('admin-request');
//Route::get('admin/dashboard/dashboard',[adminController::class,'adminRequestDashboard'])->name('admin-request-dashboard');//ssample
// Route::get('admin-message',[adminController::class,'adminMessage'])->name('admin-message');
// Route::get('admin-forms',[adminController::class,'adminForms'])->name('admin-forms');
// Route::get('admin-faqs',[adminController::class,'adminFaqs'])->name('admin-faqs');
// Route::get('admin-settings',[adminController::class,'adminSettings'])->name('admin-settings');

//Testing area
// Route::get('/bookings/{id}', [adminController::class, 'viewApp']);




