<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("oi/{texto}", function ($text) {
    echo "Oi, " . $text;
});

Route::get("/", [HomeController::class, "index"]);