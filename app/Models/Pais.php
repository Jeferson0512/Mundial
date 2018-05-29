<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';
    
    protected $fillable = ['nombre_p','nombre_adjunto','imagen'];
    
    protected $hidden = ['continente'];
    
    public function jugador(){
        return $this->hasMany('App\Models\Jugadores');
    }
}
