<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Categorias;

class CategoriasController extends Controller
{
    public function show_categorias(){
        $categoria = Categorias::all();
        return $categoria;
    }
    public function longitud(){
        $categoria = Categorias::count();
        return $categoria;
    }
}
