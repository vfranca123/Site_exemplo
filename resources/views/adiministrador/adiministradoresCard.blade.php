<div class="w-100 border rounded-1 mt-1 d-flex justify-content-between align-items-center">
    <div class="d-flex">
        @if ($user->FotoUser)
            <img src="{{ $user->getImageURL() }}" alt="foto de perfil" class="rounded-5">
        @else
            <i class="fa-regular fa-user m-3"></i>
        @endif
        <p class="m-3">{{ $user->name }}</p>
    </div>
    <a href="#" class="m-1"><i class="fa-regular fa-eye"></i></a>
</div>
