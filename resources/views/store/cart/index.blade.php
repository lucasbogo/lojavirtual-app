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
        @for($i = 1; $i <= 10; $i++)
        <tr>
            <td>
                <div>
                    <img src="{{url('assets/images/temp/fallout3.jpg')}}" alt="" class="product-item-img-cart">
                    <p class="cart-name-item">My Product Name</p>
                </div>
            </td>
            <td>R$ 30,00</td>
            <td>
                <a href="" class="item-add-remove">-</a>
                2
                <a href="" class="item-add-remove">+</a>
            </td>
            <td>R$ 60,00</td>
        </tr>
        @endfor
    </tbody>
</table>

<div class="total-cart">
    <p><strong>Total: </strong> R$ 5.000,00</p>
</div>

<div class="cart-finish">
    <a href="" class="btn-finish">Finalizar Compra!</a>
</div>

@endsection