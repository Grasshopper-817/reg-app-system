<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UsersCalendarController;
use App\Http\Controllers\CustomAuthController;
use Illuminate\Auth\Events\Logout;
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

Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration',[CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/registration-user',[CustomAuthController::class,'registerUser'])->name('registration-user');  
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[CustomAuthController::class,'logout']);

//set up form controlls
Route::get('/create',[CustomAuthController::class,'create'])->name('create');
Route::post('/create-form',[CustomAuthController::class,'createForm'])->name('create-form');    
Route::get('dashboard/edit/{id}',[CustomAuthController::class,'edit']);
Route::put('dashboard/update/{id}',[CustomAuthController::class,'update']);
Route::get('dashboard/delete/{id}',[CustomAuthController::class,'delete']);


//displaying and set appointment
//admin
Route::get('dashboard/admin',[CustomAuthController::class,'getAllForm'])->name('dashboard');

//user
Route::get('/dashboard',[CustomAuthController::class,'appointment'])->name('appointment');


