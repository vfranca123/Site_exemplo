@extends('layout.layoutAdms')
@section('content')
    @include('shared.flashs.flash')
    <h1>Cadastro</h1>
    <form action="{{ route('Adiministrador.store') }}" class="d-flex flex-column mt-5" method="POST"
        enctype="multipart/form-data">

        @csrf
        <h3 class="text-black">Nome:</h3>
        <input type="text" class="form-control col-md-6" name="name">



        <h3 class="text-black">Email:</h3>
        <input type="email" class="form-control"  name="email"c>


        <h3 class="text-black">Senha:</h3>
        <input type="password" class="form-control"  name="password">


        <h3 class="text-black">Foto</h3>
        <label for="uploadphoto" class="btn btn-secondary bg-secondary w-25" style="--bs-btn-padding-y: 1.5rem;">
            <i class="fa-solid fa-plus fs-2"></i>
        </label>
        <input type="file" accept="image/*" class="form-control d-none" id="uploadphoto" name="img">

        <input type="submit" class="btn btn-warning align-self-center m-2" value="Cadastrar">
    </form>
@endsection
