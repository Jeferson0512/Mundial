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
<<<<<<< HEAD
    public function show_length(){
        $categoria = Categoria::count()->get();
=======
    public function longitud(){
        $categoria = Categorias::count();
>>>>>>> 857aa81643130c119f86ed945f305e49440900f7
        return $categoria;
    }
}
