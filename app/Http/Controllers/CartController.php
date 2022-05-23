<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // Método index para exibir conteúdo do carrinho de compras
    public function index()
    {
        // Nome título carrinho dinamico
        $title = 'Meu Carrinho de Compras';

        /* Armazenar a sessão do usuário no carrinho de compras
         * Verifica se ja existe uma sessão
         * Se não existe, cria-se uma nova sessão
         */
        $cart = Session::has('cart') ? Session::get('cart') : new Cart;

        // Chamar o método total pela view
        $total =  $cart->total();
       
        // Armazenar os produtos no carrinho e chama-los na view
        $products = $cart->getItems();

        return view('store.cart.index', compact('title','products','total'));
    }

    // Método add para adicionar itens no carrinho [ADICIONAR]
    public function add(Request $request, $id) // Request serve para trabalhar com sessão
    {
        // Variável product para receber a Model de Product e achar pelo Id
        $product = Product::find($id);

        // Redirecionar o usuário para Home caso o produto não seja encontrado
        if(!$product)
            return redirect()->route('store.home.index');

        // Criar novo objeto na Model Cart
        $cart = new Cart;

        // Chamar o método add() para adicionar product | add($product)
        $cart->add($product); // Esse produto precisa ser salvo em um arquivo de sessão para ser recuperado

        // Chamar o request da sessão para salvar os produtos no carrinho -COMPARABLE TO [COOKIES]-
        $request->session()->put('cart', $cart);

        // Redirecionar o usuário para o carrinho após adicionar os itens no carrinho
        return redirect()->route('store.cart.index');
    }

    // Método decrement para decrementar e excluir produto
    public function decrement(Request $request, $id)
    {
        $product = Product::find($id);
        if( !$product )
            return redirect()->route('home');
        
        $cart = new Cart;
        $cart->decrementItem($product);
        
        $request->session()->put('cart', $cart);
        
        return redirect()->route('store.cart.index');
    }

}
