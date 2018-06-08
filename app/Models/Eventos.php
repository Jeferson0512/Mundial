<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table = 'eventos' ;
    
    protected $fillable = ['id','title_event','description_event','img_event','fecha_event'];
    
    protected $hidden = [''];

    public function categoria(){
        return  $this->belongsTo('App\Models\Categorias');
    }
    
}
