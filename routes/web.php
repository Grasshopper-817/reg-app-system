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
use App\Http\Controllers\MessageController;
use App\Http\Middleware\AlreadyLoggedIn;
use App\Http\Controllers\AppointmentSlotController;
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

Route::middleware([AuthCheck::class, AdminCheck::class])->prefix('dashboard-admin')->group(function () {
    Route::get('dashboard',[adminController::class,'viewAdminRecords'])->name('dashboard-admin');
    Route::post('announcement-store',[announcementController::class,'storeAnnouncement'])->name('announcement-store');
    
    //Admin Functions and content
    Route::get('request',[adminController::class,'viewAdminRequest'])->name('request');
    Route::post('create-form',[formController::class,'createForm'])->name('create-form'); 
    Route::any('config',[formController::class,'viewForm'])->name('config');
    Route::get('message',[MessageController::class,'viewMessage']);
    Route::get('announcement',[announcementController::class,'viewAnnouncementAdmin']);

    //Admin Forms Function
    Route::get('forms/{form}/edit', [FormController::class, 'edit'])->name('forms.edit');
    Route::put('forms/{form}', [FormController::class, 'update'])->name('forms.update');
    Route::delete('forms/{form}', [FormController::class,'destroy'])->name('forms.destroy');
    
});


    //Login and Registraion - Personal Information
    Route::post('/registration-user',[CustomAuthController::class,'registerUser'])->name('registration-user');  
    Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
    Route::get('/logout',[CustomAuthController::class,'logout'])->name('logout');
    Route::post('/updateProfile', [CustomAuthController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/bookAppointment',[CustomAuthController::class,'bookAppointment'])->name('bookAppointment');

    //Working in announcements -> temporary
    Route::get('/',[announcementController::class,'showAnnouncement'])->name('announcement');
    Route::get('announcement',[announcementController::class,'dashboardAnnouncement'])->name('announcement.dashboard');


    //faqs sa user side dapit -> temporary
    Route::get('/faqs',[faqsController::class,'index'])->name('faqs');

    //Para ni sa Crud sa calendar -> wala pani sure,, test rani
    Route::get('/appointment_slots', [AppointmentSlotController::class, 'index'])->name('appointment_slots.store');
    Route::post('/appointment_slots', [AppointmentSlotController::class, 'store']);
    Route::put('/appointment_slots/{appointmentSlot}', [AppointmentSlotController::class, 'update']);
    Route::delete('/appointment_slots/{appointmentSlot}', [AppointmentSlotController::class, 'destroy']);


    //Bookings Status
    Route::get('bookings/{id}', [adminController::class, 'viewApp']);
    Route::put('acceptStatus', [adminController::class, 'updateStatusAccept'])->name('acceptStatus');
    Route::put('doneStatus', [adminController::class, 'updateStatusDone'])->name('doneStatus');
    Route::put('claimedStatus', [adminController::class, 'updateStatusClaimed'])->name('claimedStatus');


        

        
        

