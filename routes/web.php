<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeConteller;
use App\Http\Controllers\ContactController;

Route::get('/',[HomeConteller::class,'index'])->name('home');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
