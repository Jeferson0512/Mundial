<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Noticias;
use App\Models\Pais;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class NoticiasController extends Controller
{

    public function index_Noticia_DESC(){
        $noticias = Noticias::orderBy('id','DESC')->get();
        return $noticias;
    }
    public function index_Noticia(){
<<<<<<< HEAD
        $noticias = Noticias::noticia();
=======
        $noticias = Noticias::orderBy('id','DESC')->get();
>>>>>>> a4066dd86263981e8e8327d984c23bb851300268
        return $noticias;
    }

    //public function index_Noticia_bla(){
    //    $noticias = Noticias::all();
    //    return $noticias;
    //}

    public function show_noticia($id){
        $noticias = Noticias::find($id);
        $p = $noticias->pais;
        return $noticias;
    }
    
    public function show_slider(){
        $noticias = Noticias::all()->first();
        return $noticias;
    }
    
    public function store(Request $request)
    {
        try
        {
            if(!$request->has('nombre_n') || !$request->has('info_n') || !$request->has('pais_id'))
            {
                throw new \Exception('Se esperaba campos mandatorios');
            }
            
            $noticias = new Noticias();
            $noticias->nombre_n = $request->get('nombre_n');
    		$noticias->info_n = $request->get('info_n');
    		$noticias->pais_id = $request->get('pais_id');
    		
    		if($request->hasFile('imagen') && $request->file('imagen')->isValid())
    		{
        		$imagen = $request->file('imagen');
        		$filename = $request->file('imagen')->getClientOriginalName();
        		
        		Storage::disk('img')->put($filename,  File::get($imagen));
        		
        		$noticias->imagen = $filename;
    		}
    		
    		$noticias->save();
    	    
    	    return response()->json(['type' => 'success', 'message' => 'Registro completo'], 200);
    	    
        }catch(\Exception $e)
        {
            return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    
}
