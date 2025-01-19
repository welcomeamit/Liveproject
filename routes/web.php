<?php

use App\Http\Controllers\ApplicationFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return redirect('/login');
});

Route::match(['get','post'],'register',[AuthController::class,'register'])->name('register'); 
Route::match(['get','post'],'login',[AuthController::class,'login'])->name('login'); 
Route::match(['get','post'],'dashboard',[AuthController::class,'dashboard'])->name('dashboard'); 
Route::match(['get','post'],'logout',[AuthController::class,'logout'])->name('logout'); 

Route::match(['get','post'],'application_form',[ApplicationFormController::class,'application_form']);
Route::match(['get','post'],'search_application',[ApplicationFormController::class,'search_application']);
Route::match(['get','post'],'print_certificate/{id}',[ApplicationFormController::class,'print_certificate']);
Route::match(['get','post'],'download_certificate/{id}',[ApplicationFormController::class,'download_certificate']);