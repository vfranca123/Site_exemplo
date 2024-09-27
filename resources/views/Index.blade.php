@extends('layout.layout')
@section('content')

    <div  id="carouselExampleIndicators" class="carousel slide vh-10">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="/storage/carrossel/1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="/storage/carrossel/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="/storage/carrossel/3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h1 id="produtos" class="text-light m-4"> Nossos Melhores produtos pra você </h1>

    <h1 class="text-light"> Guitarras</h1>

         <div  id="carouselExampleIndicators" class="carousel slide vh-10">
        
        <div class="carousel-inner">
            <div class="carousel-item active d-flex justify-content-center">
                @if (count($produtos) > 0)
                    @foreach ($produtos as $produto)
                        <div>
                            {{ $produto->links($produto) }}
                        </div>
                    @endforeach
                @else
                    <h1 class="m-4 text-white">nenhum produto encontrado</h1>
                @endif
            </div>
            <div class="carousel-item">
                <img src="/storage/produtos/2.jpg" class="d-block w-20" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/storage/produtos/3.jpg" class="d-block w-20" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
        
    </div>
   
@endsection