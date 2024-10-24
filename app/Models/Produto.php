<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    

    // Campos que podem ser atribuídos em massa
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'quantidade',
        'tipo',  
    ];

    public function links($produto){
        return view('produtos.ProdutoCard',['produto'=>$produto]);
    } 

    public function FotoProduto(){
        return $this->hasOne(FotoProduto ::class,'produtos_id','id');       
    }
    
    public function getImageURL(){
        if($this->FotoProduto){
            return asset("storage/{$this->FotoProduto->img}");
        } return null;
        
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
