<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    // Método index para visualização da store encontrada em /view/store/home
    public function index()
    {
        $title = 'NewModern HomePage';

        return view('store.home.index', compact('title'));
    }
}
