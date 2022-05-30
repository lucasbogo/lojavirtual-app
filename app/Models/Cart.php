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


class Cart extends Model
{
     use HasFactory;

    // Atributo 'items' que recebe array vazio por padrão
    private $items = [];

    // Construtor para verificar se o produto ja existe no carrinho
    public function __construct()
    {
        // Lógica para verificar se sessão existe
        if(Session::has('cart')) {

            // Recuperar itens do carrinho
           $cart = Session::get('cart');

           // Recebe um objeto da Model cart
           $this->items = $cart->items;

        }
            
    }

    // Método para adicionar no carrinho: Recebe como parâmetro o produto à ser adicionado no carrinho
    public function add(Product $product)
    {
        // Se existir um produto no array...
        if(isset($this->items[$product->id])) {

            // Incrementar mais um para o item já adicionado
            $this->items[$product->id] = [
                'item' => $product,
                'qtd'  => $this->items[$product->id]['qtd'] + 1,
            ];

        // Caso Contrário...
        }else {

             // Adicionar novo produto
            $this->items[$product->id] = [
                'item' => $product,
                'qtd'  => 1,
            ];
        }
    }

    // Método para Decrementar item do carrinho]
    public function decrementItem(Product $product)
    {
        // Se existir  produtos no array
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

        // Retorna o valor da lógica loop implmentada acima [SOMA-PRODUTOS-CARRINHO]
        return $total;
    }

    // Método para mostrar o total de itens no ícone carrinho localizado no header
    public function totalItems()
    {
        return count($this->items); // Contador de itens...
    }

}
