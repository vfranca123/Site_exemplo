<nav class="navbar navbar-expand-lg" style=" background-color: #8B4513;">
  <div class="container-fluid">
        <a class="nav-link m-3 col-md-3" href="{{route('Index')}}">
            <h1 class="text-light"> Music</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="d-flex col-md-5" role="search">
            <input class="form-control me-2" type="search" placeholder="Busque seu produto aqui" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
            <a class="nav-link m-3 col-md-1 text-light" href="#produtos">Produtos</a>
        </li>

        <li class="nav-item">
            <a class="nav-link m-3 col-md-1 text-light" href="#footer">Contatos</a>
        </li>

        <li class="nav-item">
            <a class="nav-link m-3 col-md-1 text-light" href="#footer">Informaçoes</a>
        </li>

        <li class="nav-item">
            <a class="nav-link m-3 col-md-1 text-light" href="#footer">Informaçoes</a>
        </li>

        <li class="nav-item">
            @auth
                <a href="{{ route('logout') }}" class="nav-link m-3 col-md-13 text-warning">
                    <i class="fa-solid fa-door-open fs-3"></i>
                </a>
            @endauth
            @guest
            <a class="nav-link m-3 col-md-13 text-primary" href="{{route('login.Index')}}">
                <i class="fa-solid fa-user fs-3"></i>
            </a>
            @endguest
        </li>

      </ul>
      
    </div>
  </div>
</nav>
<!--
<nav class="navbar" style=" background-color: #8B4513;">

    <div class="container-fluid">
        

        <div class="col-md-12 d-flex flex-row">
            
            <a class="nav-link m-3 col-md-6" href="{{route('Index')}}">
                <h1 class="text-light"> Music</h1>
            </a>
            <a class="nav-link m-3 col-md-1 text-light" href="#produtos">
                Produtos
            </a>
            <a class="nav-link m-3 col-md-1 text-light" href="#footer">Contatos</a>
            <a class="nav-link m-3 col-md-1 text-light" href="#footer">Informaçoes</a>

            @auth
                <a href="{{ route('logout') }}" class="nav-link m-3 col-md-13 text-warning">
                    <i class="fa-solid fa-door-open fs-3"></i>
                </a>
            @endauth
            @guest
            <a class="nav-link m-3 col-md-13 text-primary" href="{{route('login.Index')}}">
                <i class="fa-solid fa-user fs-3"></i>
            </a>
            @endguest
            
        </div>

    </div>
</nav>

-->