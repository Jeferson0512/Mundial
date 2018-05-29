<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugadores extends Model
{
    protected $table = 'jugadores';
    
    protected $fillable = ['nombre_j','apellido_j','posicición'];
        
    protected $hidden = ['pais_id'];
    
    public function pais(){
        return $this->belongsTo('App\Models\Pais');
    }
}
