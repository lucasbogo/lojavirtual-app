<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
  
    // Método para mostrar o perfil do Usuário
    public function profile()
    {
        $title = 'Meu Perfil';

        return view('store.user.profile', compact('title'));
    }

    
    // Método para sair do perfil do usuário [LOGOUT]
    public function logout()
    {
        Auth::logout();

        // A partir do logout, redireciona-se o usuário para Home
        return redirect()->route('store.home.index');
    }

    public function profileUpdate(Request $request, User $user)// Injeção de User p/ evitar declaração; Assim cria-se o objeto automaticamente
    {
        $this->validate($request, $user->rulesProfile); // Chamar o atributo rulesProfile

        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->save();

        // Redirecionar para o perfil de usuário e mostrar mesagem de succeso após atualização do perfil
        return redirect()
        ->route('user.profile')
        ->with('success', 'Perfil Atualizado com Sucesso!');

    }

    public function password(Request $request)
    {
        $title = 'Atualizar Senha';

        return view('store.user.password', compact('title'));

    }

    public function passwordUpdate(Request $request, User $user)
    {
        $this->validate($request, $user->rulesPassword); // Chamar o atributo rulesProfile

        $user = User::find(auth()->user()->id);
        $user->password = bcrypt($request->password); // Criptografia em cima da senha passada pelo usuário
        $user->save();

        // Redirecionar para o campo senha e mostrar mesagem de succeso após atualização da senha
        return redirect()
        ->route('user.password')
        ->with('success', 'Senha Atualizada com Sucesso!');

    }
}
