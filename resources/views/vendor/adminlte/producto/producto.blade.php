@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Añadir Producto
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
        		<h3 class="text-center color-azul"><strong><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp; Añadir Producto&nbsp;<i class="fa fa-pencil-square" aria-hidden="true"></i></strong></h3>  
	        	<form method="POST" action="{{url('admin/Producto')}}" accept-charset="UTF-8" class="" id="RegistroFormCategoria">
	        		<input name="_token" type="hidden" value="{{ csrf_token() }}">
	                                    <div class="form-group row">
	                                        <div class="col-sm-4 ">
	                                          <label class="color-azul ">Nombre del Producto</label>

	                                          <input type="text" class="form-control text-left"  id="cDescripcionProducto" name="cDescripcionProducto"  required placeholder="Nombre del Producto" maxlength="50" >
	                                          <span  id ="ErrorMensaje-Nombre" class="help-block"></span>
	                                        </div>

	                                        <div class="col-sm-4">
	                                        	<lbl class="color-azul">Precio</lbl>
	                                        	<input type="text" class="form-control text-left" id="precio" name="precio" placeholder="Precio del Producto">
	                                        	<span class="ErrorMensaje-precio" class="help-block"></span>
	                                        </div>

	                                        <div class="col-sm-4">
	                                        <label class="color-azul">Categoria:</label>
	                                        <select class="form-control text-center" name="categoria_id" id="categoria_id">
		                                        @foreach($categorias as $categoria)
				                                    <option value="{{ $categoria->id }}" >{{ $categoria->nombre_categoria}}</option>
		                              			@endforeach
	                            			</select>
	                                        <span  id ="ErrorMensaje-sexo_id" class="help-block"></span>
	                                      </div>
	                                        
	                                    </div>

	                                   
	                                    
	                                    
	                                   
	                                    <div class="row"> 
	                                      <div class="col-xs-12">
	                                       {{-- <a href ="" id="btnContinuarPasoUno" class="btn btn-block pull-left btn-principal btn-continuar"><i class="fa fa-play-circle-o fa-3x" aria-hidden="true"></i><span style="font-size:40px;"> Continuar</span></a> --}}
	                                       <button type="submit" id="btnAñadirCategoria" class="btn btn-block pull-left btn-success"><i class="fa fa-plus-square fa-2x" aria-hidden="true"></i><span style="font-size:20px;">&nbsp; Añadir Producto</span></button>
	                                       <br>
	                                       <br>
	                                       <br>
	                                       <br>
	                                       <br>
	                                      </div>
	                                      
	                                    </div>
	          </form>
        	</div>
		</div>
	</div>

@endsection