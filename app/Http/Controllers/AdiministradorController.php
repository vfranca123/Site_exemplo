<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdiministradorController extends Controller
{
    public function index(){
        return view('adiministrador.HomePage_Dos_Adms');
    }
}
