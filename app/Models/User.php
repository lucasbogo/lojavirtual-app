<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token']; 

    // Exceptions | mostrar mensagem de excessões | regras para p/ login 
    public $rulesProfile = [
        'name' => 'required|min:3|max:100',
    ];

     // Exceptions | mostrar mensagem de excessões | regras para p/ senha
     public $rulesPassword = [
        'password' => 'required|min:5|max:20|confirmed',
    ];
}
