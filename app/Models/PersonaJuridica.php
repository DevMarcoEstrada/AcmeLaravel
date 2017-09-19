<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB as DB;
class PersonaJuridica extends Model
{
    //

    protected $table = 'personasjuridicas';
    public $primarykey = 'id';

    public static function GuardarPersonaJuridica($data)
    {
    	try
         {
            DB::beginTransaction();

            	$codigo_persona_generado = DB::table('personas')->insertGetId(
	     			[
	     				'tipo_persona_id' => 2,
	     				'estado_id' => 1, 
			 			'created_at' =>  date_create()->format('Y-m-d H:i:s'),
			 			'updated_at' =>  date_create()->format('Y-m-d H:i:s')				
	     			]
		 		);

		    	// Insertando en la tabla

		    	$persona_juridica = new PersonaJuridica();

		    	$persona_juridica->Ruc = $data['Ruc'];
				$persona_juridica->RazonSocial = $data['RazonSocial'];
				$persona_juridica->cDescripcionEmpresa = $data['cDescripcionEmpresa'];
				$persona_juridica->departamento_id = $data['departamento_id'];
				$persona_juridica->provincia_id = $data['provincia_id'];
				$persona_juridica->distrtio_id = $data['distrito_id'];
				$persona_juridica->cDireccionNegocio = $data['cDireccionNegocio'];
				$persona_juridica->nLatitudNegocio = $data['nLatitudNegocio'];
				$persona_juridica->nLongitudNegocio = $data['nLongitudNegocio'];
				$persona_juridica->cPaginaContacto = $data['cPaginaContacto'];
				$persona_juridica->persona_id = $codigo_persona_generado;
				$persona_juridica->created_at = date_create()->format('Y-m-d H:i:s');
				$persona_juridica->updated_at = date_create()->format('Y-m-d H:i:s');
				$persona_juridica->save();

          	DB::commit();

          	return true;  

         } catch(Exception $e)
         {
            DB::rollback();

            return false; 

    	 }






    }
}
