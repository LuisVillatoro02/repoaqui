<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class ComentarioController extends Controller
{
    public function create(Request $request)
    {
        try {
            $data = $this->validateForm($request);
            Comentario::insert($data);
            Alert::success('Comentario enviado exitosamente!', 'Gracias por hacernos llegar tu opinión.');
            return redirect(route('home'));
        }catch (Exception $e){
            Alert::error('Ha ocurrido un error', 'Lamentablemente no se ha podido enviar el comentario, inténtalo de nuevo más tarde.');
            return redirect(route('home'));
        }
    }

    public function validateForm (Request $request){
        $validatedData = $request->validate([
            'nombre_cliente'=>'required|max:100',
            'telefono'=>'max:25',
            'correo'=>'max:75',
            'comentario'=>'required'
        ]);
        return $validatedData;
    }
}
