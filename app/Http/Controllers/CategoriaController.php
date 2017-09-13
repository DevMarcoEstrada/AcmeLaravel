<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{
    //
    public function AñadirCategoria()
    {
    	return view('adminlte::categoria.categoria');
    }

    public function GuardarCategoria(Request $request)
    {
    	$data = $request->all();
    	$resultado = Categoria::GuardarCategoria($data);

    	if($resultado)
    	{
    		return redirect()->back()->with('status','Los Datos han sido guardados exitosamente');
    	}else{
    		return redirect()->back()->with('errors','Los Datos no han sido guardados correctamente');
    	}
    }


}
