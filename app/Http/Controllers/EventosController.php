<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Eventos;

class EventosController extends Controller
{

    public function index_event(){
        $eventos = Eventos::orderBy('id','DESC')->take(4)->get();
        return $eventos;
    }

}
