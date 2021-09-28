<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationFormController;
use App\Http\Controllers\LoginController;
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
    return view('welcome');
});
Route::get('/',[RegistrationFormController::class,'index'])->middleware('checkAllreadyLogIn');
Route::get('register',[RegistrationFormController::class,'index'])->middleware('checkAllreadyLogIn');
Route::get('login',[LoginController::class,'index'])->middleware('checkAllreadyLogIn');
Route::post('register-here',[RegistrationFormController::class,'store']);
Route::get('list',[RegistrationFormController::class,'show']);
Route::post('login-user',[LoginController::class,'loginUser']);
Route::get('profile',[LoginController::class,'profile'])->middleware('checkLogIn');
Route::get('logout',[LoginController::class,'logout']);
Route::get('delete/{id}',[RegistrationFormController::class,'destroy']);
Route::post('update-profile-student',[RegistrationFormController::class,'updateProfile']);