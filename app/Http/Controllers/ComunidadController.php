<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Comunidad;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ComunidadController extends Controller
{
    public function index()
    {
        $comunidad = Comunidad::orderBy("comunity_date")->get();
        
        return $comunidad;
    }
    
    public function store(Request $request)
    {
        try
        {
            if(!$request->has('comunity_description'))
            {
                throw new \Exception('Se esperaba la descripción');
            }
            
            $comunidad = new Comunidad();
            $comunidad->comunity_user = $request->get('comunity_user');
            $comunidad->comunity_description = $request->get('comunity_description');
            $comunidad->comunity_date = $request->get('comunity_date');
            
            if($request->hasFile('comunity_image') && $request->file('comunity_image')->isValid())
            {
                $comunity_image = $request->file('comunity_image');
                $filename = $request->file('comunity_image')->getClientOriginalName();
                
                Storage::disk('img')->put($filename,  File::get($comunity_image));
                
                $comunidad->comunity_image = $filename;
                
                $comunity_user_img = $request->file('comunity_user_img');
                $filename = $request->file('comunity_user_img')->getClientOriginalName();
                
                Storage::disk('img')->put($filename,  File::get($comunity_user_img));
                
                $comunidad->comunity_user_img = $filename;
            }
            
            $comunidad->save();
            
            return response()->json(['type' => 'success', 'message' => 'Registro completo'], 200);
            
        }catch(\Exception $e)
        {
            return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
}