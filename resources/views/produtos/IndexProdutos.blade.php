@extends('layout.layout')
@section('content')
    <div class="h-100"> 
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

        <h1 class="text-light"> Pianos</h1>

         <div  id="carouselpiano" class="carousel slide vh-10">
        
        <div class="carousel-inner">
            <div class="carousel-item active d-flex justify-content-center">
                <img src="/storage/produtos/1.jpeg" class="d-block w-20 m-4" alt="..." style="height: 50vh; ">
                <img src="/storage/produtos/2.jpg" class="d-block w-20 m-4" alt="..." style="height: 50vh; ">
                <img src="/storage/produtos/3.jpg" class="d-block w-20 m-4" alt="..." style="height: 50vh; ">
            </div>
            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselpiano" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselpiano" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>

    </div>    

@endsection