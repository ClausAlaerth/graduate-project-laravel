<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        $dataHoraAtual = date("d H:i");  // Dia e Hora
        return view("home", compact('dataHoraAtual'));  // Envia para a view.
    }
}