<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Rota para visualização do .index Store encontrada em /views/store/home [HOME]
Route::get('/', [StoreController::class, 'index'])->name('store.home.index');

// Rota para visualização do .index Carrinho de compras encontrada em /views/store/cart [CARRINHO]
Route::get('/carrinho', [CartController::class, 'index'])->name('store.cart.index');

// Rota para adicionar itens no carrinho [CARRRINHO | ADD-CART]
Route::get('adicionar-carrinho/{id}', [CartController::class, 'add'])->name('add.cart');

// Rota para decrementar e excluir itens no carrinho [CARRRINHO | DECREMENT-CART]
Route::get('decrementar-carrinho/{id}', [CartController::class, 'decrement'])->name('decrement.cart');

// Rota para visualização do .profile PerfilUsuário encontrada em /views/store/user [PERFIL]
Route::get('/meu-perfil', [UserController::class, 'profile'])->name('store.user.profile');

// Rotas de autenticação, login e recuperação de senhas criadas pelo comando php artisan ui:auth
Auth::routes();

/* Rota para efetuar logout de usuário encontrada no dropdown sair [LOGIN]
 * Route::get('/login', [UserController::class, 'login'])->name('store.user.login'); 
 */

// Rota para efetuar logout de usuário encontrada no dropdown sair [LOGOUT]
Route::get('/logout', [UserController::class, 'logout'])->name('store.user.logout');

// Grupo de rotas para trabalhar com callback
Route::group(['middleware' => 'auth'],function() {

   // Rota para visualização do .profile PerfilUsuário encontrada em /views/store/user [PERFIL]
   Route::get('/meu-perfil', [UserController::class, 'profile'])->name('store.user.profile');

   // Rota para atualização do PerfilUsuário encontrada em /views/store/user [ATUALIZAR-PERFIL]
   Route::get('/atualizar-perfil', [UserController::class, 'update'])->name('user.profile');

   // Rota para visualizar a senha do Usuário  [PASSWORD]
   Route::get('/minha-senha', [UserController::class, 'password'])->name('user.password');

   // Rota para atualização da senha do Usuário [ATUALIZAR-SENHA]
   Route::get('/atualizar-senha', [UserController::class, 'passwordUpdate'])->name('user.password');
});

/*
Route::get('/', function () { 
   return view('welcome');
});
*/


