<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller {
    public function showForm() {
        return view("form");  // Shows form
    }

    public function submitForm(Request $request) {
        
        // Data validation
        $request->validate([
            "nome" => "required|string|max:255",
            "email" => "required|email",
        ]);

        // Recover data
        $nome = $request->input("nome");
        $email = $request->input("email");

        // Returns a response with the data
        return view("form-success", compact("nome", "email"));
    }
}