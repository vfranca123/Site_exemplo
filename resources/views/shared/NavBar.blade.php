<nav class="navbar" style=" background-color: #8B4513;">

    <div class="container-fluid">
        

        <div class="col-md-12 d-flex flex-row">
            
            <a class="nav-link m-3 col-md-6" href="{{route('Index')}}">
                <h1 class="text-light"> Music</h1>
            </a>
            <a class="nav-link m-3 col-md-1 text-light" href="#produtos">
                Produtos
            </a>
            <a class="nav-link m-3 col-md-1 text-light" href="#footer">
                Contatos
            </a>
            <a class="nav-link m-3 col-md-1 text-light" href="#footer">
                 Informaçoes
            </a>

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