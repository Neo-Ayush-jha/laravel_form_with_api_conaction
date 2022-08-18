<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


Route::get('/', [FormController::class,'index'])->name('index');
Route::get('/form', [FormController::class,'create']);
Route::post("/",[FormController::class,"store"])->name("store");
Route::get('/single/{form}', [FormController::class,'singleView'])->name('single');
