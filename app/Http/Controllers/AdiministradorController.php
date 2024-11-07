<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdiministradorController extends Controller
{
    public function index()
    {
        $Users = User::take(2)->get();// Obtenha todos os usuários
        return view('adiministrador.HomePage_Dos_Adms', compact('Users')); // Passe a variável para a view
    }

    
}
