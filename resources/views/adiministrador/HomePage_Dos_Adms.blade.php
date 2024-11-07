@extends('layout.layoutAdms')
@section('content')
    @include('shared.flashs.flash')
    <div class="d-flex row p-3">

        <div class="col-md-5 boder rounded-3 bg-white m-1">
            <h5 class="mt-1">Pedidos pendendentes</h5>
            <hr>
                
            <a href="#" class="text-primary">ver todos</a>
            
        </div>

        <div class="col-md-5 boder rounded-3 bg-white m-1">
            <h5 class="mt-1">Administradores</h5>
            <hr>
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
@endsection
