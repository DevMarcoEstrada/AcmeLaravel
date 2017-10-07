<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB as DB;
use App\Models\Persona;

class PersonaNatural extends Model
{
    protected $table='personasnaturales';
    public $primaryKey ='id';

    public static function GuardarPersonaNatural($data)
    {
    	// Insertando en la tabla: personas:

    	$codigo_persona_generado = DB::table('personas')->insertGetId(
     			[
     				'tipo_persona_id' => 1,
     				'estado_id' => 1, 
		 			'created_at' =>  date_create()->format('Y-m-d H:i:s'),
		 			'updated_at' =>  date_create()->format('Y-m-d H:i:s')				
     			]
		 	);

    	// Insertando en la tabla

    	$persona_natural = new PersonaNatural();

    	$persona_natural->Nombres = $data['Nombres'];
		$persona_natural->cApellidoPaterno = $data['cApellidoPaterno'];
		$persona_natural->cApellidoMaterno = $data['cApellidoMaterno'];
		$persona_natural->cCorreoElectronico = $data['cCorreoElectronico'];
		$persona_natural->cCelular = $data['cCelular'];
		$persona_natural->cTelefonoFijo = $data['cTelefonoFijo'];
		$persona_natural->sexo_id = $data['sexo_id'];
		$persona_natural->estado_civil_id = $data['estado_civil_id'];
		$persona_natural->departamento_id = $data['departamento_id'];
		$persona_natural->provincia_id = $data['provincia_id'];
		$persona_natural->distrtio_id = $data['distrito_id'];
		$persona_natural->cDireccionNegocio = $data['cDireccionNegocio'];
		$persona_natural->nLatitudNegocio = $data['nLatitudNegocio'];
		$persona_natural->nLongitudNegocio = $data['nLongitudNegocio'];
		$persona_natural->cPaginaContacto = $data['cPaginaContacto'];
		$persona_natural->numero_tarjeta = $data['numero_tarjeta'];
		$persona_natural->persona_id = $codigo_persona_generado;
		$persona_natural->created_at = date_create()->format('Y-m-d H:i:s');
		$persona_natural->updated_at = date_create()->format('Y-m-d H:i:s');
		$persona_natural->dni = $data['dni'];
		$persona_natural->save();

		return true;
    }

    public static function GuardarPersonaNatural2($data)
    {
    	 try
         {
            DB::beginTransaction();

            	$codigo_persona_generado = DB::table('personas')->insertGetId(
	     			[
	     				'tipo_persona_id' => 1,
	     				'estado_id' => 1, 
			 			'created_at' =>  date_create()->format('Y-m-d H:i:s'),
			 			'updated_at' =>  date_create()->format('Y-m-d H:i:s')				
	     			]
		 		);

		    	// Insertando en la tabla

		    	$persona_natural = new PersonaNatural();

		    	$persona_natural->Nombres = $data['Nombres'];
				$persona_natural->cApellidoPaterno = $data['cApellidoPaterno'];
				$persona_natural->cApellidoMaterno = $data['cApellidoMaterno'];
				$persona_natural->cCorreoElectronico = $data['cCorreoElectronico'];
				$persona_natural->cCelular = $data['cCelular'];
				$persona_natural->cTelefonoFijo = $data['cTelefonoFijo'];
				$persona_natural->sexo_id = $data['sexo_id'];
				$persona_natural->estado_civil_id = $data['estado_civil_id'];
				$persona_natural->departamento_id = $data['departamento_id'];
				$persona_natural->provincia_id = $data['provincia_id'];
				$persona_natural->distrtio_id = $data['distrito_id'];
				$persona_natural->cDireccionNegocio = $data['cDireccionNegocio'];
				$persona_natural->nLatitudNegocio = $data['nLatitudNegocio'];
				$persona_natural->nLongitudNegocio = $data['nLongitudNegocio'];
				$persona_natural->cPaginaContacto = $data['cPaginaContacto'];
				$persona_natural->numero_tarjeta = $data['numero_tarjeta'];
				$persona_natural->persona_id = $codigo_persona_generado;
				$persona_natural->created_at = date_create()->format('Y-m-d H:i:s');
				$persona_natural->updated_at = date_create()->format('Y-m-d H:i:s');
				$persona_natural->dni = $data['dni'];
				$persona_natural->save();

          	DB::commit();

          	return true;  

         } catch(Exception $e)
         {
            DB::rollback();

            return false; 

    	 }
    }

    public static function ListarPersonasNaturales($datos)
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
        
        $query .= " SELECT personasnaturales.id, personasnaturales.dni, 
                          personasnaturales.cCorreoElectronico, personasnaturales.Nombres,
                          estados.nombre_estado
                    FROM personasnaturales 
                        inner join personas on personas.id = personasnaturales.persona_id 
                        inner join estados on estados.id = personas.estado_id";

        if(!empty($_POST["searchPhrase"]))
        {
         $query .= ' WHERE (personasnaturales.id LIKE "%'.$_POST["searchPhrase"].'%" ';
         $query .= 'OR personasnaturales.dni LIKE "%'.$_POST["searchPhrase"].'%" ';
         $query .= 'OR personasnaturales.cCorreoElectronico LIKE "%'.$_POST["searchPhrase"].'%" ';
         $query .= 'OR estados.nombre_estado LIKE "%'.$_POST["searchPhrase"].'%" ';
         $query .= 'OR personasnaturales.Nombres LIKE "%'.$_POST["searchPhrase"].'%" ) ';
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
         $query .= ' ORDER BY personasnaturales.id DESC ';
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


        $total_records = PersonaNatural::count();


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