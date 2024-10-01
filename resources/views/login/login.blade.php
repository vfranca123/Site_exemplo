@extends('layout.layout')

@section('content')
    <div class="container-xl rounded-5 vh-100 d-flex align-items-center justify-content-center flex-column">
        <div class="container-sm w-50">
            <h1 class="text-light"> <i class="fa-solid fa-user text-primary"></i>    Login de administradores</h1>
            <form action="{{ route('login.authenticate') }}"
                class="d-flex align-items-center justify-content-center flex-column">
                @csrf
                <h2 class="text-light align-self-start mt-5">Usuario</h2>
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" aria-label="Sizing example input" name="name"
                        aria-describedby="inputGroup-sizing-lg">
                </div>

                <h2 class="text-light align-self-start mt-5">Senha</h2>
                <div class="input-group input-group-lg">
                    <input type="password" class="form-control" aria-label="Sizing example input" name="password"
                        aria-describedby="inputGroup-sizing-lg">
                </div>
                <input type="submit" class="btn btn-primary m-4" value="Entrar">
            </form>

        </div>
    </div>
@endsection