<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get("register", [UserController::class, "index"]);

Route::post("register-user", [UserController::class, "registerUser"]);