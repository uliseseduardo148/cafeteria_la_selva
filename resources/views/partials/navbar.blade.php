<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            CAFETERÍA LA SELVA
        </a>

        @if (Auth::check())

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Opciones
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                <a class="dropdown-item" href="{{ url('/users/edit/'.Auth::id()) }}">Editar mis datos</a>
                <a class="dropdown-item" href="{{ url('/users') }}">Usuarios registrados</a>
                <form action="{{ route('logout') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="dropdown-item">Cerrar sesión</button>
                </form>
            </div>
        </div>
        @endif

    </div>
</nav>