<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;

class MensajeController extends Controller
{
    //
    public function GuardarMensaje(Request $request)
    {
    	$data = $request->all();

    	$resultado = Mensaje::GuardarMensaje($data);

    	if ($resultado)
    	{
    		return redirect()->back()->with('status', 'El Mensaje ha sido enviado correctamente');
    	}else{
    		return redirect()->back()->with('errors', 'El Mensaje no ha sido enviado');
    	}

    }
    public function MostrarMensajes()
    {
        $mensajes = Mensaje::ListarMensajes();
        return view('adminlte::mensaje.mensaje', compact('mensajes'));
    }
}
