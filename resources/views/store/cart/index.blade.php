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
        <!--Listar Produtos Dinamicamente-->
        @forelse($products as $product)
        <tr>
            <td>
                <div>
                    <img src="{{url("assets/images/temp/{$product['item']->image}")}}" alt="" class="product-item-img-cart">
                    <!--Exibir nome-produto dinamicamente-->
                    <p class="cart-name-item">{{$product['item']->name}}</p>
                </div>
            </td>
            <!--Exibir preço dinamicamente-->
            <td>R$ {{$product['item']->price}}</td>
            <td>
                <a href="{{route('decrement.cart', $product['item']->id)}}" class="item-add-remove">-</a>
                <!--Exibir quantidade do produto dinamicamente-->
                {{$product['qtd']}}
                <a href="{{route('add.cart', $product['item']->id)}}" class="item-add-remove">+</a>
            </td>
            <!--Exibir subtotal do produto dinamicamente-->
            <td>R$ {{$product['qtd'] * $product['item']->price}}</td>
        </tr>
        @empty<!--se não existe nenhum produto, mostrar mensagem "Carrinho Vazio!"-->
        <tr>
            <td colspan="20">Carrinho Vazio!</td>   
        </tr> 

        @endforelse
    </tbody>
</table>

<div class="total-cart">
    <!--Exibir a soma do subtotal de todos os produtos-->
    <p><strong>Total: </strong> R$ {{$total}}</p>
</div>

<div class="cart-finish">
    <a href="" class="btn-finish">Finalizar Compra!</a>
</div>

@endsection