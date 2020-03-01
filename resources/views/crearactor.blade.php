<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Crear Actor/es</title>
  </head>
  <body>
    {{-- NAVBAR --}} {{-- NAVBAR --}} {{-- NAVBAR --}} {{-- NAVBAR --}} {{-- NAVBAR --}}

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Proyecto Recuperatorio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/peliculas">Peliculas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/actores">Actores</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Generos</a>
          </li>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cuenta
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>

          </div>
        </div>
      </div>
    </nav>

    {{-- NAVBAR --}} {{-- NAVBAR --}} {{-- NAVBAR --}} {{-- NAVBAR --}} {{-- NAVBAR --}}

<h1>Creador de Actores</h1>
<br>
    <form action="/crearactor" id="crearactor" name="crearactor" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
        <div>
            <label for="first_name">Nombre</label>
            <input type="text" name="first_name" value="{{old('first_name')}}" id="first_name"/>
        </div>
        <div>
            <label for="last_name">Apellido</label>
            <input type="text" name="last_name" value="{{old('last_name')}}" id="last_name"/>
        </div>
        <div>
            <label for="rating">Rating</label>
            <input type="text" name="rating" value="{{old('rating')}}" id="rating"/>
            <br>
            <br>
            <input class="btn btn-success" type="submit" value="Agregar Actor">
            <input class="btn btn-warning" type="reset" value="Reset">
        </div>


    </form>

    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">

          <small class="d-block mb-3">&copy; 2019-2020 Proyecto Recuperatorio de Jose Rojas </small>
        </div>
      </div>
    </footer>
<br>
    <!-- Footer --> <!-- Footer --> <!-- Footer --> <!-- Footer --> <!-- Footer -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
