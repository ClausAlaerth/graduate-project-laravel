<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        $dataHoraAtual = date("d H:i");  // Shows Date and Hour
        return view("home", compact('dataHoraAtual'));  // Sends to View
    }
}