<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Genero;
use App\Actor;

class ActoresController extends Controller
{
  public function listar(){
    $actores = Actor::paginate(3);
    return view('actores', compact('actores'));
  }

  public function agregar(Request $req){
    $nuevoActor = new Actor();

    $nuevoActor->first_name = $req["first_name"];
    $nuevoActor->last_name = $req["last_name"];
    $nuevoActor->rating = $req["rating"];

    $nuevoActor->save();

    return redirect('/actores');

    }





}
