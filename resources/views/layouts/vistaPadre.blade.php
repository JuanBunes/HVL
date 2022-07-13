<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('css')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Base de Datos Huella Verde</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light mb-3" style="background-color: #d6e7ce">
      <div class="container-fluid" style="font-size: 18px">
        <a class="navbar-brand" href="/">
          <img src="https://images.vexels.com/media/users/3/127670/isolated/preview/1c400fa105ae69ed69e526f8a4a96a76-tina-de-planta-de-flor-plana.png" alt="" width="60" height="47">
          <b>Huella Verde</b>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        @guest
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a style="color: #126e1b" class="nav-link" href="{{ route('login') }}"><b>{{ __('Iniciar sesión') }}</b></a>
            </li>
          </ul>
        </div> 
        @else
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle mx-2" href="#" id="navbarDropdownMenuLink" style="color: #126e1b" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <b>Tablas</b>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/productos"><b>Productos</b></a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/categorias"><b>Categorías</b></a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle mx-2" style="color: #126e1b" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <b>Acceso rápido</b>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/productos/create"><b>Añadir nuevo producto</b></a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/categorias/create"><b>Añadir nueva categoría</b></a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" style="color: #126e1b" class="nav-link dropdown-toggle mx-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <b>{{ Auth::user()->name }}</b>
              </a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a style="color: #126e1b" class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <b>{{ __('Cerrar sesión') }}</b>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
        </ul>
      </div>     
      @endguest
    </div>
  </nav>
  @yield('contenidoPrincipal')

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  @yield('js')
</body>
</html>