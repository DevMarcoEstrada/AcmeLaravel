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


    public static function GuardarProducto($data)
    {
    	$producto = new Producto();
    	
    	// $id_categoria = Categoria::Nombre2Id($data['categoria_id']);


    	$producto->cDescripcionProducto = $data['cDescripcionProducto'];
    	$producto->precio = $data['precio'];
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
}
