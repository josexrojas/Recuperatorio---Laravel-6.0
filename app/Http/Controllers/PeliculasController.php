<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Genero;
use App\Actor;


class PeliculasController extends Controller
{
  public function listar(){
    // SELECT * FROM movies
    $peliculas = Pelicula::paginate(10);
    return view('peliculas', compact('peliculas'));
  }

public function editar(Request $request)
 {
    $pelicula = Pelicula::find($request->id);

    $pelicula = new Pelicula();

    $pelicula->title = $request->text;
    $pelicula->rating = $request->number;
    $pelicula->awards = $request->number;
    $pelicula->release_date = $request->date;
    $pelicula->length = $request->number;
    $pelicula->genre_id = $request->number;


    $pelicula->save();
                return redirect('/peliculas');
 }
}
