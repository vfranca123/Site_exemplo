<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'img',
        'user_id'
    ];
}
