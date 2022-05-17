@extends('store.templates.master')

@section('content')

<h1 class="title">Promoção:</h1>

<article class="col-md-3 col-sm-6 col-xm-12">
    <div class="product-item">
        <img src="{{url('assets/images/temp/fallout3.jpg')}}" alt="" class="product-item-img">
        
        <h1>Title my Product</h1>
        
        <a class="btn btn-buy">
            Adicionar no Carrinho
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </a>
    </div>
</article>
<article class="col-md-3 col-sm-6 col-xm-12">
    <div class="product-item">
        <img src="{{url('assets/images/temp/fallout3.jpg')}}" alt="" class="product-item-img">
        
        <h1>Title my Product</h1>
        
        <a class="btn btn-buy">
            Adicionar no Carrinho
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </a>
    </div>
</article>
<article class="col-md-3 col-sm-6 col-xm-12">
    <div class="product-item">
        <img src="{{url('assets/images/temp/fallout4.jpg')}}" alt="" class="product-item-img">
        
        <h1>Title my Product</h1>
        
        <a class="btn btn-buy">
            Adicionar no Carrinho
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </a>
    </div>
</article>
<article class="col-md-3 col-sm-6 col-xm-12">
    <div class="product-item">
        <img src="{{url('assets/images/temp/fallout4.jpg')}}" alt="" class="product-item-img">
        
        <h1>Title my Product</h1>
        
        <a class="btn btn-buy">
            Adicionar no Carrinho
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </a>
    </div>
</article>


@endsection