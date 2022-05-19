<?php

/* 
 * Model Cart serve para trabalhar com o carrinho de compras: 
 * adicionar itens, verificar itens, aumentar quantidade e diminuir quantidade.
 *
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Cast\Unset_;

class Cart extends Model
{
    use HasFactory;

    // Atributo 'items' que recebe array vazio por padrão
    private $items = [];

    // Construtor para verificar se o produto ja existe no carrinho
    public function __construct()
    {
        // Lógica para verificar se sessão existe
        if( Session::has('cart')) {

            $cart = Session::get('cart');

            $this->items = $cart->items;
        }
            
    }

    // Método para adicionar no carrinho: Recebe como parâmetro o produto à ser adicionado no carrinho
    public function add(Product $product)
    {
        // Se existir um produto no array, incrementar mais um para o item já adicionado
        if(isset($this->items[$product->id])) {
            $this->items[$product->id] = [
                'item' => $product,
                'qtd'  => $this->items[$product->id]['qtd'] + 1,
            ];

        }else {
            // Se não existir produto no array, adicionar novo produto
            $this->items[$product->id] = [
                'item' => $product,
                'qtd'  => 1,
            ];
        }
    }

    // Método para Decrementar item do carrinho]
    public function decrementItem(Product $product)
    {
        // 
        if(isset($this->items[$product->id])){

            // Se a quantidade do item for igual a 1 [EXCLUIR]
            if ($this->items[$product->id]['qtd']== 1){

                // Remover o item da posição no array [EXCLUIR]
                unset($this->items[$product->id]);
            }else{
                // Se existir mais de 1, decrementar um item do array [DECREMENTAR]
                $this->items[$product->id] = [
                    'item' => $product,
                    'qtd'  => $this->items[$product->id]['qtd'] - 1,
                ];
            }
        }
    }

    // Método para recuperar itens do carrinho
    public function getItems()
    {
        return $this->items;
    }

    // Método para mostrar o valor total dos produtos inseridos no carrinho
    public function total()
    {
        // Variável...
        $total = 0;

        // Se o carrinho estiver vazio, retorna 0 ou nulo
        if(count($this->items) == 0)
            return $total;
        
       
        // Caso contrário, faz um loop somando todos os produtos
        foreach($this->items as $item){
            $subTotal = $item['item']->price * $item['qtd'];

            $total += $subTotal;
        }

        // Retorna o valor da lógica loop implmentada acima [SOMA PRODUTOS CARRINHO]
        return $total;
    }
}
