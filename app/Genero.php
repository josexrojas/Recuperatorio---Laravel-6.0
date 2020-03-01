<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pelicula;
use App\Actor;

class Genero extends Model
{
  public $table = "genres";

  public $guarded = [];

  public function genero(){
    return $this->hasMany(Genero::class, 'genre_id');
}
//   public function genero(){
//     return $this->belongsTo(Genero::class, 'genre_id');
// }
}
