<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pais;
use DB;

class Noticias extends Model
{
    protected $table = 'noticias';
    
    protected $fillable = ['nombre_n','info_n','imagen','created_at'];
        
    protected $hidden = ['pais_id','updated_at'];
    
    public function pais(){
        return $this->belongsTo('App\Models\Pais');
    }
    public static function noticia(){
        return DB::table('noticias')
        ->join('paises','paises.id','=','noticias.pais_id')
        ->select('noticias.*','paises.nombre_p')
        ->get();
    }
}
