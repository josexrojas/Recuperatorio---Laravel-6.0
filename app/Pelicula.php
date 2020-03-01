<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Actor;
use App\Genero;


class Pelicula extends Model
{
  public $table = "movies";

  public $guarded = [];

  public function genero(){
    return $this->belongsTo(Genero::class, 'genre_id');
  }










}
