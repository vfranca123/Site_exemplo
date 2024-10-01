<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index(){
    return view('login.login');
   }

    public function authenticate()
    {
        
        $validet = request()->validate([

            'name' => 'required',
            'password' => 'required'

        ]);

        if (auth()->attempt($validet)) {

            request()->session()->regenerate();
            
            return redirect()->route('Adiministrador.Index')->with('flash','login feito com sucesso');
        }

        return redirect()->route('login.Index');
    }

    public function logout()
    {
        request()->session()->invalidate();
        auth()->logout(); // pega os dados do cara logado e e faz um logOut
        request()->session()->invalidate(); // invalida os dados anteriores pra segurança
        request()->session()->regenerate(); // limpa a cache

        return redirect()->route('Index')->with('flash','logout feito com sucesso');
    }
}
