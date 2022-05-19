<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;


// Rota para visualização do .index Store encontrada em /views/store/home [HOME]
Route::get('/', [StoreController::class, 'index'])->name('store.home.index');

// Rota para visualização do .index Carrinho de compras encontrada em /views/store/cart [CARRINHO]
Route::get('/carrinho', [CartController::class, 'index'])->name('store.cart.index');

// Rota para adicionar itens no carrinho [CARRRINHO | ADD-CART]
Route::get('add-cart/{id}', [CartController::class, 'add'])->name('add.cart');

// Rota para decrementar e excluir itens no carrinho [CARRRINHO | DECREMENT-CART]
Route::get('decrement-cart/{id}', [CartController::class, 'decrement'])->name('decrement.cart');

// Rota para visualização do .profile PerfilUsuário encontrada em /views/store/user [PERFIL]
Route::get('/meu-perfil', [UserController::class, 'profile'])->name('store.user.profile');



/*
Route::get('/', function () { 
   return view('welcome');
});
*/