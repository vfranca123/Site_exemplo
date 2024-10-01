@if (session()->has('flash'))
    <div class="container">
        <div id="flashMessage" class="alert alert-success alert-dismissible fade show" role="alert">
            <div class="d-flex justify-content-between">
                <p>{{ session('flash') }}</p>
                <button type="button" class="btn fs-5 close-flash btn-sm" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@endif

<script>
    // Adicionando evento de clique ao botão de fechar
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.close-flash').addEventListener('click', function() {
            document.querySelector('#flashMessage').classList.add('fade');

            setTimeout(function() {
                document.querySelector('#flashMessage').style.display = 'none';
            }, 500);
        });

    });
</script>