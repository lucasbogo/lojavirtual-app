@extends('store.templates.master')

@section('content')

    <h1 class="title">Home</h1>

    <!--Exibir itens dinamicamente-->
    @foreach($products as $product)
     
        <article class="col-md-3 col-sm-6 col-xm-12">
        <div class="product-item">
            <!--exibir imagens localizadas em /images/temp de forma dinamica-->
            <img src="{{url("assets/images/temp/{$product->image}")}}" alt="" class="product-item-img">
        
            <!--exibir nome dos produtos dinamicamente-->
            <h1>{{$product->name}}</h1>
        
            <!--adiconar produto no carrinho, rota add.cart declarada em routes/web.php-->
             <a href="{{route('add.cart', $product->id)}}" class="btn btn-buy">
                 Adicionar no Carrinho
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </a>
        </div>
    @endforeach   
@endsection