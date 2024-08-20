<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/users',[UserController::class,'loadAllUsers']);
Route::get('add/user',[UserController::class,'loadAddUser']);
Route::post('add/user',[UserController::class,'AddUser'])->name('AddUser');
