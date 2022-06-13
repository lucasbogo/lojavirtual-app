<?php

// Representação da tabela de produtos; é a partir da Model Products que listamos os produtos

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Fillable = denominaão para os campos que podem ser preenchidos.
    protected $fillable = [
        'name', 
        'description',
        'image', 
        'price',
    ];
}
