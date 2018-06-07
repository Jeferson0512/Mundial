<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Comunidad;

class ComunidadController extends Controller
{
    public function index()
    {
        $comunidad = Comunidad::orderBy("comunity_date")->get();
        
        return $comunidad;
    }
}