<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Chamar Views Product

class StoreController extends Controller
{
    // Método index para visualização da store encontrada em /view/store/home
    public function index()
    {
        // Mostrar Titulo na View | return view('store.home.index', compact ('title',...))
        $title = 'NewModern HomePage';

        /* Recuperar todos os produtos | Chamar isso na View abaixo em: compact('title','products');
        $products = Product::all();
        */

        // Recuperar produtos pelo o id em ordem decrescente
        $products = Product::orderBy('id','DESC')->get();

        return view('store.home.index', compact('title','products'));
    }
}
