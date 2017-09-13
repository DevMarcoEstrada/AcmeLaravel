<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
class ProductoController extends Controller
{
    //
    public  function AñadirProducto()
    {
        $categorias = Categoria::Listar_Categorias();
    	return view('adminlte::producto.producto', compact('categorias'));
    }

    public  function GuardarProducto(Request $request)
    {
    	$data = $request->all();

    	 $resultado = Producto::GuardarProducto($data);
        

    	if($resultado)
    	{
    		return redirect()->back()->with('status', 'Los Datos se han guardado con exito');
    	}else{
    		return redirect()->back()->with('errors', 'Los Datos no han sido guardados ');
    	}
    }
}
