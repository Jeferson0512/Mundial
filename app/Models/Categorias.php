<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['nombre'];

    protected $hidden = ['id'];

    public function evento(){
        return $this->hasMany('App\Models\Eventos');
    }
    public function noticia(){
        return $this->hasMany('App\Models\Noticias');
    }
}
