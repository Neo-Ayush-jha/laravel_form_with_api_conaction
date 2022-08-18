<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', [FormController::class,'index'])->name('index');
Route::get('/show', [FormController::class,'create']);
Route::post("/",[FormController::class,"store"])->name("store");
Route::get('/single/{form}', [FormController::class,'singleView'])->name('single');

