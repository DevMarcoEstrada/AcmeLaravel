<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    //
     public static function GuardarMensaje($data)
    {
    	$mensaje = new Mensaje();

    	$mensaje->nombres = $data['nombres'];
    	$mensaje->correo_electronico = $data['correo_electronico'];
    	$mensaje->mensaje = $data['mensaje'];
        $mensaje->save();
    	return true;
    }

    public static function ListarMensajes()
    {
    	return Mensaje::all();
    }
}
