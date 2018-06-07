<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pa;

class Juga extends Model
{
    protected $table = "jugas";
    
    public function pais(){
        return $this->belongsTo("App\Models\Pa");
    }
}
