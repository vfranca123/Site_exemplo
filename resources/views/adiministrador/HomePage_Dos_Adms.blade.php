@extends('layout.layoutAdms')
@section('content')
    @include('shared.flashs.flash')
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

                @if (count($Users) > 0)
                    @foreach ($Users as $user)
                        <div>
                            {{ $user->links($user) }}
                        </div>
                    @endforeach
                
                @endif

                <div class="d-flex flex-column">
                    <a href="{{ route('CadastroAdiministrador.Index') }}">
                        <i class="fa-solid fa-user-plus"></i>
                    </a>
                    <a href="#" class="text-primary">ver todos</a>
                </div>
            </div>
        </div>

    </div>
@endsection
