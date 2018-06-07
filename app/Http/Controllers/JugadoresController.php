<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Pais;
use App\Models\Jugadores;

use App\Models\Pa;
use App\Models\Juga;

class JugadoresController extends Controller
{
    public function index_Pais(){
        $paises = Pais::all();
        return $paises;
    }

    public function index_Jugador(){
        $jugadores = Jugadores::all();
        return $jugadores;
    }
    public function show_jugador($id){
        $jugadores = Jugadores::find($id);
        $p = $jugadores->pais;
        return $jugadores;
    }

    public function show_pais($id){
        $paises = Pais::find($id);
        $ja = $paises->jugador;
        return $paises;
    }
    
    public function prueba($id){
        
        $paises = Pais::find($id);
        $ja = $paises->jugador;
        return $paises;
    }
}