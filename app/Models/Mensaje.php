<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    //
     public static function GuardarMensaje($data)
    {
    	$mensaje = new Mensaje();

    	$mensaje->nombres = $data['name'];
    	$mensaje->correo_electronico = $data['email'];
    	$mensaje->mensaje = $data['message'];
        $mensaje->telefono = $data['phone'];
        $mensaje->save();
    	return true;
    }

    public static function ListarMensajes()
    {
    	return Mensaje::all();
    }
}
