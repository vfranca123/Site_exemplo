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

    <h1 class="text-light m-4"> Nossos Melhores produtos pra você </h1>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="/storage/produtos/1.jpg" class="img-fluid" style="height: 50vh; " alt="Imagem 1">
            </div>
            
            <div class="col-md-4 mb-4">
                <img src="/storage/produtos/2.jpg" class="img-fluid" alt="Imagem 2" style="height: 50vh; ">
            </div>

            <div class="col-md-4 mb-4">
                <img src="/storage/produtos/3.jpg" class="img-fluid" alt="Imagem 3" style="height: 50vh; ">
            </div>

            <div class="col-md-4  mb-4">
                <img src="/storage/produtos/4.jpg" class="img-fluid" alt="Imagem 4" style="height: 50vh; ">
            </div>

           
    </div>
        
    </div>
   
@endsection