<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("oi/{texto}", function ($text) {
    echo "Oi, " . $text;
});