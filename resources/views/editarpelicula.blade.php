
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Editar Peliculas</title>
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


    <br>


<h2>Editar pelicula</h2>
<br>
      <form action="/editarpelicula" id="editarpelicula" name="editarpelicula" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
          <div>
              <label for="title">Titulo</label>
              <input type="text" name="title" value="{{old('title')}}" id="title"/>
          </div>
          <div>
              <label for="rating">Rating</label>
              <input type="number" name="rating" value="{{old('rating')}}" id="rating"/>
          </div>
          <div>
              <label for="awards">Premios</label>
              <input type="number" name="awards" value="{{old('awards')}}" id="awards"/>
          <div>
              <label for="release_date">Fecha de Estreno</label>
              <input type="date" name="release_date" value="{{old('release_date')}}" id="release_date"/>
          </div>
          <div>
              <label for="length">Duracion</label>
              <input type="number" name="length" value="{{old('length')}}" id="length"/>
          </div>
          <div>
              <label for="genre_id">Genero</label>
              <input type="number" name="genre" value="{{old('genre_id')}}" id="genre_id"/>
          </div>
          </div>
          <br>
          <input class="btn btn-success" type="submit" value="Editar Pelicula">
          <input class="btn btn-warning" type="reset" value="Reset">




  </body>
</html>
