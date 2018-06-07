<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Pais;
use DB;

class PaisesController extends Controller
{
    public function show_anfitrion(){
        $paises = Pais::where('continente','anfitrion')->get();
        //$paises = Pais::where('continente','anfitrion')->orderBy("nombre_p")->get();
        //$paises = DB::table('paises')->where('continente','anfitrion')->orderBy("nombre_p")->get();
        return $paises;
    }
    public function show_africa(){
        $paises = Pais::where('continente','africa')->get();
        return $paises;
    }
    public function show_sudamerica(){
        $paises = Pais::where('continente','sudamerica')->get();
        return $paises;
    }
    public function show_asia(){
        $paises = Pais::where('continente','asia')->get();
        return $paises;
    }
    public function show_concacaf(){
        $paises = Pais::where('continente','concacaf')->get();
        return $paises;
    }
    public function show_europa(){
        $paises = Pais::where('continente','europa')->get();
        return $paises;
    }
    ///SEPARACION POR GRUPOS QUE JUGARAN
    public function show_grupoA(){
        $paises = Pais::where('grupo','grupoA')->get();
        return $paises;
    }
    public function show_grupoB(){
        $paises = Pais::where('grupo','grupoB')->get();
        return $paises;
    }
    public function show_grupoC(){
        $paises = Pais::where('grupo','grupoC')->get();
        return $paises;
    }
    public function show_grupoD(){
        $paises = Pais::where('grupo','grupoD')->get();
        return $paises;
    }
    public function show_grupoE(){
        $paises = Pais::where('grupo','grupoE')->get();
        return $paises;
    }
    public function show_grupoF(){
        $paises = Pais::where('grupo','grupoF')->get();
        return $paises;
    }
    public function show_grupoG(){
        $paises = Pais::where('grupo','grupoG')->get();
        return $paises;
    }
    public function show_grupoH(){
        $paises = Pais::where('grupo','grupoH')->get();
        return $paises;
    }
    
}
