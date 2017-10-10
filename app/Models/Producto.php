<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\DB as DB;
class Producto extends Model
{
    //
    protected $table = 'productos';
    public $primarykey = 'id';




    public static function Listar_ProductosMostrar()
    {
        return Producto::select("productos.id as idarticulo",
                               "productos.precio as precio",
                               "productos.stock as stock",
                               "productos.cDescripcionProducto as cDescripcionProducto")
                        ->get();
    }

    public static function GuardarProducto($data)
    {
    	$producto = new Producto();
    	
    	// $id_categoria = Categoria::Nombre2Id($data['categoria_id']);


    	$producto->cDescripcionProducto = $data['cDescripcionProducto'];
    	$producto->precio = $data['precio'];
    	$producto->stock = $data['stock'];
        $producto->categoria_id = $data['categoria_id'];
        $producto->ruta_imagen = ImageController::GuardarImagen($data['image'], $data['cDescripcionProducto']);
        $producto->created_at = date_create()->format('Y-m-d H:i:s');
        $producto->updated_at = date_create()->format('Y-m-d H:i:s');
    	$producto->save();
    	return true;
    }

    public static function Listar_Productos_Categoria()
    {
        //return Producto::all();
        return DB::table('productos')
                ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
                ->select('productos.*', 'categorias.nombre_categoria')
                ->get();

    }
public static function Listar_Productos()
    {
        //return Producto::all();
        return Producto::select("productos.id",
                                       "productos.precio",
                                       "productos.cDescripcionProducto",
                                       "productos.cApellidoPaterno",
                                       "productos.cApellidoMaterno",
                                       "productos.Nombres",
                                       "estados.nombre_estado",
                                       "productos.persona_id")
                                ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
                                ->orderBy('productos.id','DESC')
                                ->paginate(4); 
    }

 public static function ListarProductosCrud($datos)
    {
         $query = '';
        
        $records_per_page = 10;
        
        $start_from = 0;
        
        $current_page_number = 0;

        if(isset($_POST["rowCount"]))
        {
         $records_per_page = $datos["rowCount"];
        }
        else
        {
         $records_per_page = 10;
        }

        if(isset($_POST["current"]))
        {
         $current_page_number = $datos["current"];
        }
        else
        {
         $current_page_number = 1;
        }

        $start_from = ($current_page_number - 1) * $records_per_page;
        
        $query .= " SELECT  productos.id, productos.cDescripcionProducto, productos.precio, 
                          productos.stock, categorias.nombre_categoria 
                         
        FROM productos 
        inner join Categorias on Categorias.id = productos.categoria_id";


        if(!empty($_POST["searchPhrase"]))
        {
         $query .= ' WHERE (productos.id LIKE "%'.$_POST["searchPhrase"].'%" ';
         $query .= ' WHERE (productos.cDescripcionProducto LIKE "%'.$_POST["searchPhrase"].'%" ';
         $query .= 'OR productos.precio LIKE "%'.$_POST["searchPhrase"].'%" ';
         $query .= 'OR productos.stock LIKE "%'.$_POST["searchPhrase"].'%" ';
         $query .= 'OR categorias.nombre_categoria LIKE "%'.$_POST["searchPhrase"].'%" ';
         // $query .= 'OR estados.nombre_estado LIKE "%'.$_POST["searchPhrase"].'%" )';
        }

        $order_by = '';

        if(isset($_POST["sort"]) && is_array($_POST["sort"]))
        {
         foreach($_POST["sort"] as $key => $value)
         {
          $order_by .= " $key $value, ";
         }
        }
        else
        {
         $query .= ' ORDER BY productos.id DESC ';
        }

        if($order_by != '')
        {
         $query .= ' ORDER BY ' . substr($order_by, 0, -2);
        }

        if($records_per_page != -1)
        {
         $query .= " LIMIT " . $start_from . ", " . $records_per_page .";";
        }


        $results = DB::select($query);


        $total_records = Producto::count();


        $output = array(
         'current'  => intval($datos["current"]),
         'rowCount'  => $records_per_page,
         'total'   => intval($total_records),
         'rows'   => $results
        );

        $total_records = null;
        $query = null;
        $records_per_page = null;
        $order_by = null;
        $start_from = null;

        return json_encode($output);

    }
}
 