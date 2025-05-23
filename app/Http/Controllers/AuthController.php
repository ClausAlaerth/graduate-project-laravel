<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller {
    public function showLoginForm() {
        return view("login");  // Shows Login form
    }

    public function processLogin(Request $request) {
        
        // Data validation
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:6",
        ]);

        // Auth simulation
        if ($request->email === "lucas@teste.com" && $request->password === "senha123") {
            // Redirect to adm area
            // return redirect()->route("adminArea");
            $nomeUsuario = "Lucas";
            return redirect()->route("admin.area")->with("nomeUsuario", $nomeUsuario);
        }

        // Returns an error if credentials are invalid
        return back()->withErrors(["login" => "Credenciais inválidas."]);

    }

    public function adminArea() {
        //return view("admin");  // Shows admin area
        $nomeUsuario = session("nomeUsuario", "Usuário Anônimo");
        return view("admin", compact("nomeUsuario"));
    }
}