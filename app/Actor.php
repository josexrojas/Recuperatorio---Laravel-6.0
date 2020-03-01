<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pelicula;
use App\Genero;

class Actor extends Model
{
  public $table = "actors";

  public $guarded = [];

  public function actor(){
    return $this->belongsToMany(Actor::class, 'actor_movie', 'actor_id', 'movie_id');

}
}
