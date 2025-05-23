<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Button Homepage
Route::get("/", [HomeController::class, "index"]);

// Working with Forms
Route::get("/form", [FormController::class, "showForm"])->name("form.show");
Route::post("/form", [FormController::class, "submitForm"])->name("form.submit");

// First project: Login Auth
Route::get("/login", [AuthController::class, "showLoginForm"])->name("login.show");
Route::post("/login", [AuthController::class, "processLogin"])->name("login.process");

// First project: Login Auth - Admin area
Route::post("/admin", [AuthController::class, "adminArea"])->name("admin.area");
