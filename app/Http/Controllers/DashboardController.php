<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){
        $produtos=Produto::orderBy('created_at', 'DESC');
        return view('Index',['produtos'=> $produtos->paginate(5)]);
    }

    
}
