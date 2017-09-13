<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
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
        $producto->created_at = date_create()->format('Y-m-d H:i:s');
        $producto->updated_at = date_create()->format('Y-m-d H:i:s');
    	$producto->save();
    	return true;
    }
}
