<?php

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
//Route::resource('/dashboard',UsersCalendarController::class);
Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration',[CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/registration-user',[CustomAuthController::class,'registerUser'])->name('registration-user');  
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[CustomAuthController::class,'logout']);

Route::get('/admin', [CustomAuthController::class, 'showAllNames']);
