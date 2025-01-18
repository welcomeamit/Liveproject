<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserForm;

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get','post'],'register',[AuthController::class,'register'])->name('register'); 
Route::match(['get','post'],'login',[AuthController::class,'login'])->name('login'); 
Route::match(['get','post'],'dashboard',[AuthController::class,'dashboard'])->name('dashboard'); 
Route::match(['get','post'],'logout',[AuthController::class,'logout'])->name('logout'); 

Route::match(['get','post'],'user_form',[UserForm::class,'user_form']);