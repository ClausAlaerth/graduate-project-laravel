<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("Oi/{texto}", function ($text) {
    echo "Oi, " . $text;
});