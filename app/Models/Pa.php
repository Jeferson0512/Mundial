<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Juga;

class Pa extends Model
{
    protected $table = "pas";
    
    public function jugadores(){
        return $this->hasMany("App\Models\Juga");
    }
}
