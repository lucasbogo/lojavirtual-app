<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  
    // Método para mostrar o perfil do Usuário
    public function profile()
    {
        $title = 'Meu Perfil';

        return view('store.user.profile', compact('title'));
    }
}
