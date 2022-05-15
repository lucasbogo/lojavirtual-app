<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;


// Rota para visualização do .index encontrada em /views/store/home
Route::get('/', [StoreController::class, 'index'])->name('store.home.index');

// Rota para visualização do .index Carrinho de compras encontrada em /views/store/cart
Route::get('/carrinho', [CartController::class, 'index'])->name('store.cart.index');

// Rota para visualização do .profile PerfilUsuário encontrada em /views/store/user
Route::get('/meu-perfil', [UserController::class, 'profile'])->name('store.user.profile');

/*
Route::get('/', function () { 
   return view('welcome');
});
*/