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


    public function MostrarProductos()
    {
        $productos = Producto::Listar_Productos_Categoria();
        return view('adminlte::producto.mostrarproductos', compact('productos'));
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
//
    public function crud(request $request )
    {

        $productos = Producto::ListarProductos();
        if ($request->ajax()) {
            
            return view('adminlte::producto.productotable',compact('productos'));    
        } else {
           // $productos = Producto::Listar();
            return view('adminlte::producto.productocrud',compact('productos'));
        }  
    }

public function CrudProductos()
    {
        return view('adminlte::producto.productocrudpro');
    }
     

public function ListarProductos(Request $request)
    {

        $datos = $request->all();
        return Producto::ListarProductosCrud($datos);
       
    }



    public function VerProducto($id)
    {
        //$id : codigo de persona natural.
        //echo $id;
        $productos = Producto::Listar_Producto($id);

        //dd($personasnataurales);
        
        return view('adminlte::producto.VerProducto',compact('productos'));
    }

    // public function VerBootGridProducto($id)
    // {
    //     //$id : codigo de persona natural.
    //     //echo $id;
    //     $productos = Producto::Listar_Producto($id);

    //     //dd($personasnataurales);
        
    //     return view('adminlte::producto.VerProducto',compact('productos'));
    // }

    public function EditarProducto($id)
    {
        $cDescripcionProducto = DescripcionProducto::Listar_DescripcionProducto();
        $precio = Precio::Listar_precio();
        $stock  = Stock::Listar_stock();
        $categoria_id = Categoria::Listar_categoria_id($id);
        $ruta_imagen = ImageController::Listar_Imagen($data['image'], $data['cDescripcionProducto']);
        




        return view('adminlte::productos.EditarProducto',compact('cDescripcionProducto','precio','stock','categoria_id','categoria_id'));
    }

//     public function EditarBootGridPersonaNatural($id)
//     {
//         $cDescripcionProducto = DescripcionProducto::Listar_DescripcionProducto();
//         $precio = Precio::Listar_precio();
//         $stock  = Stock::Listar_stock();
//         $categoria_id = Categoria::Listar_categoria_id($id);
//         $ruta_imagen = ImageController::Listar_Imagen($data['image'], $data['cDescripcionProducto']);
        



//         return view('adminlte::productos.EditarProducto',compact('cDescripcionProducto','precio','stock','categoria_id','categoria_id'));


//     }
//     public function EditarBootGridGuardarPersonaNatural(request $request)
//     {

//         $data= $request->all();

//         // var_dump($data);

//         $bresultado = Producto::EditarProducto($data);

//         if ($bresultado) {
            
//             return redirect('Producto/CrudBootGrid')->with('status','Los Datos se actualizaron correctamente.');

//         } else {
            
//             return redirect('Producto/CrudBootGrid')->with('errors','La Datos No se actualizaron correctamente.');

//         }
        
//     }
    
//     public function EditarGuardarProducto(request $request)
//     {

//         $data= $request->all();

//         // var_dump($data);

//         $bresultado = Producto::EditarProducto($data);

//         if ($bresultado) {
            
//             return redirect('Producto/Crud')->with('status','Los Datos se actualizaron correctamente.');

//         } else {
            
//             return redirect('Producto/Crud')->with('errors','La Datos No se actualizaron correctamente.');

//         }
        
//     }



}
