<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FotoUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;

class CadastroController extends Controller
{
    public function index()
    {
        return view('adiministrador.Cadastro');
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => 'required|min:3|max:26',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
            'img' => 'nullable|image'
        ]);

    
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);

            // Verifica e armazena a imagem, se fornecida
            if (isset($validated['img'])) {
                $imagePath = request()->file('img')->store('FotosUsers', 'public');
                FotoUser::create([
                    'user_id' => $user->id,
                    'img' => $imagePath
                ]);
            }

            return redirect()->route('Adiministrador.Index')->with('flash', 'Perfil cadastrado com sucesso!');
    }
}
