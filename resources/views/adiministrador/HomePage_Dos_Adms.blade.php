@extends('layout.layoutAdms')
@section('content')
    @include('shared.flash')
    <div class="d-flex row">

        <div class="card col-md-5 m-3">
            <h5 class="card-header">Pedidos pendendentes</h5>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="text-primary">ver todos</a>
            </div>
        </div>

        <div class="card col-md-5 m-3">
            <h5 class="card-header">Administradores</h5>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                <div class="d-flex flex-column">
                    <a href="#">
                        <i class="fa-solid fa-user-plus"></i>
                    </a>
                    <a href="#" class="text-primary">ver todos</a>
                </div>
            </div>
        </div>

    </div>
@endsection
