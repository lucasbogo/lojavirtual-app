<nav class="navbar navbar-default">
  <div class="container-fluid">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--redirecionamento p/ home ao clickar na logo-->
      <a class="navbar-brand" href="{{route('store.home.index')}}">
        <img src="{{url('assets/images/Logotipo-01.png')}}" alt="NewModern" class="logo">
        </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li>
          <!--redirencionamento para carrinho da loja-->
          <a href="{{route('store.cart.index')}}">
                Meu Carrinho <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <!--mostar quantidade itens dinamicamente no badge ao lado do ícone carrinho-->
                <span class="badge">
                  @if (Session::has('cart'))
                      {{Session::get('cart')->totalItems()}}
                  @else
                      0
                  @endif

                </span>
            </a>
        </li>
        <!--verificar se usuario está logado, se estiver mostra o dropdown-menu; se não mostra o link-login -->
        @if( auth()->check() )
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <!--Helper para exibir nome de usuário dinamicamente na view-->
            {{auth()->user()->name}} 
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <!--redirecionamento para entrar no perfil-->
          <li><a href="{{route('store.user.profile')}}">Perfil</a></li>
          <!--redirencionamento para alterar senha-->
          <li><a href="{{route('user.password')}}">Alterar Senha</a></li>
          <li role="separator" class="divider"></li>
          <!--redirencionamento para logout-->
          <li><a href="{{route('store.user.logout')}}">Sair</a></li>
          </ul>
        </li>
        @else
        <li>
          <!--redirecionamento para Login ao clickar em Login-->
          <a href="{{route('login')}}">Login</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>