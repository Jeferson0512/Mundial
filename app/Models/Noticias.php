<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pais;
use DB;

class Noticias extends Model
{
    protected $table = 'noticias';
    
    protected $fillable = ['id','nombre_n','info_n','imagen','created_at'];
        
    protected $hidden = ['updated_at','pais_id'];
    
    public function pais(){
        return $this->belongsTo('App\Models\Pais');
    }
    public function categoria(){
        return $this->belongsTo('App\Models\Categorias');
    }
    public static function noticia(){
        return DB::table('noticias')
        ->join('paises','paises.id','=','noticias.pais_id')
        ->select('noticias.*','paises.nombre_p')
        ->get();
    }
}
