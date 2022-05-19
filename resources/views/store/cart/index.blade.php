@extends('store.templates.master')

@section('content')

<h1 class="title">Meu Carrinho de Compras</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Item</th>
            <th>Preço</th>
            <th>Qtd</th>
            <th>Sub. Total</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)<!--Listar Produtos Dinamicamente-->
        <tr>
            <td>
                <div>
                    <img src="{{url("assets/images/temp/{$product['item']->image}")}}" alt="" class="product-item-img-cart">
                    <p class="cart-name-item">{{$product['item']->name}}</p><!--Exibir nome dinamicamente-->
                </div>
            </td>
            <td>R$ {{$product['item']->price}}</td><!--Exibir preço dinamicamente-->
            <td>
                <a href="{{route('decrement.cart', $product['item']->id)}}" class="item-add-remove">-</a>
                {{$product['qtd']}}<!--Exibir quantidade do produto dinamicamente-->
                <a href="{{route('add.cart', $product['item']->id)}}" class="item-add-remove">+</a>
            </td>
            <td>R$ {{$product['qtd'] * $product['item']->price}}</td><!--Exibir subtotal do produto dinamicamente-->
        </tr>
        @empty
        <tr>
            <td colspan="20">Carrinho Vazio!</td>   
        </tr> 

        @endforelse
    </tbody>
</table>

<div class="total-cart">
    <p><strong>Total: </strong> R$ {{$total}}</p><!--Exibir a soma do subtotal de todos os produtos-->
</div>

<div class="cart-finish">
    <a href="" class="btn-finish">Finalizar Compra!</a>
</div>

@endsection