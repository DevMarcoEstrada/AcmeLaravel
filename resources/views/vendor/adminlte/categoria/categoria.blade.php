@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Añadir Categoria
@endsection
@section('contentheader_title')
	Nueva Categoria
@endsection

@section('css')
	<style>
		.content-wrapper
			{
    			background-color: #ffffff;
			}
		.color-azul
			{
				color: #337ab7;
			}
		.fa-pencil-square
			{
				color: #00a65a;
			}
		.form-control
			{
				border-radius:4px;
			}
		.fa-bars
	    {
			color: #3c8dbc;
	    }
	    .boton-azul
		{
			background-color: #3c8dbc;
			color: #ffffff;
		}
		.form-control[readonly]{
		    background-color: #ffffff;
		    opacity: 1;
		    }
		#map_canvas
	  	{
	    	width:600px; 
	    	height:400px;
	    	border: 1px solid #337ab7 !important;
	  	}
		.help-block
		{
	  	    color: red;
		}
	 @media(max-width: 768px) 
	 	{
			#map_canvas
		  	{
		    	width:320px;
		  	}

		}
	</style>
@endsection

@section('script-inicio')
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBC-ueG56d4pm8xrNLlPssupxlCCuwWIOo&libraries=adsense&language=es"></script>
@endsection


@section('main-content')

<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
        		<h3 class="text-center color-azul"><strong><i class="fa fa-bars" aria-hidden="true"></i>&nbsp; Añadir Categoria&nbsp;<i class="fa fa-bars" aria-hidden="true"></i></strong></h3>  
	        	<form method="POST" action="{{url('admin/Categoria')}}" accept-charset="UTF-8" class="" id="RegistroFormCategoria">
	        		<input name="_token" type="hidden" value="{{ csrf_token() }}">
	                                    <div class="form-group row">
	                                        <div class="col-sm-6 col-sm-offset-3">
	                                          <label class="color-azul ">Nombre de la Categoria:</label>

	                                          <input type="text" class="form-control text-left"  id="nombre_categoria" name="nombre_categoria"  required placeholder="Nombre de la Categoria" maxlength="50" >
	                                          <span  id ="ErrorMensaje-NombreCategoria" class="help-block"></span>
	                                        </div>
	                                        
	                                    </div>
	                                  
	                                    <div class="form-group row">
	                                      <div class="col-sm-6 col-sm-offset-3" >
	                                        <label class="color-azul">Descripción:</label>
	                                       <!--  <input type="text" class="form-control text-left"  id="descripcion" name="descripcion"  required placeholder="ASDASD" maxlength="50" > -->
	                                        <textarea name="descripcion" id="descripcion" cols="5" rows="6" class="form-control" maxlength="250" placeholder="Añada una descripcion..."></textarea>
	                                        <span  id ="ErrorMensaje-Descripcion" class="help-block"></span>
	                                      </div>
	                                      
	                                    </div>
	                                   
	                                    
	                                    
	                                   
	                                    <div class="row"> 
	                                      <div class="col-xs-12">
	                                       {{-- <a href ="" id="btnContinuarPasoUno" class="btn btn-block pull-left btn-principal btn-continuar"><i class="fa fa-play-circle-o fa-3x" aria-hidden="true"></i><span style="font-size:40px;"> Continuar</span></a> --}}
	                                       <button type="submit" id="btnAñadirCategoria" class="btn btn-block pull-left boton-azul"><i class="fa fa-plus fa-2x" aria-hidden="true"></i><span style="font-size:20px;">&nbsp; Añadir Categoria</span></button>
	                                      
	                                      </div>
	                                      
	                                    </div>
	          </form>
        	</div>
		</div>
	</div>

@endsection

@section('script-fin')
<script>
	$('#nombre_categoria').on("keypress", function(){
		$("#ErrorMensaje-NombreCategoria").hide();

	})

	$('#descripcion').on("keypress", function(){
		$("#ErrorMensaje-Descripcion").hide();
	})

	$('#btnAñadirCategoria').on("click", function(evt)
	{
		var nombre_categoria = $('#nombre_categoria').val().trim();

		if( nombre_categoria == null || nombre_categoria.length == 0)
		{
			nombre_categoria = null;
			$("#ErrorMensaje-NombreCategoria").text("El Nombre no puede ser vacio");
			$("#ErrorMensaje-NombreCategoria").show();
			$("#nombre_categoria").focus();	
			return false;
		}

		var descripcion = $('#descripcion').val().trim();
		if(descripcion == null || descripcion.length == 0)
		{
			
			$("#ErrorMensaje-Descripcion").text("La descripcion no puede ser vacia");
			$("#ErrorMensaje-Descripcion").show();
			$("#descripcion").focus();
			return false;
		}
	});	

</script>
@endsection

