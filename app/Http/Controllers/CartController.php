<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Método index para exibir conteúdo do carrinho de compras
    public function index()
    {
        $title = 'Meu Carrinho de Compras';

        return view('store.cart.index', compact('title'));
    }
}
