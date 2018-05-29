<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Eventos;

class EventosController extends Controller
{

    public function index_event(){
        $eventos = Eventos::all()->take(4);
        return $eventos;
    }

}
