@extends('adminlte::layouts.app')

@section('contentheader_title')
	Producto
@endsection

@section('htmlheader_title')
	Productos
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
		.fa-product-hunt
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


<div class="container">
	
	<div class="row">

			<div class="col-sm-12 col-md-3 col-md-offset-2" >
				<h3 class="h3 text-left"><strong>Descripción:</strong></h3>
			</div>

			{{-- <div class="col-sm-12 col-md-3 ">

				<h3 class="h3 text-justify ">
					{{$producto[0]->cDdescripcionProducto}}
				</h3>
			</div>
			 --}}
		</div>
		 
		<div class="row">

			<div class="col-sm-12 col-md-3 col-md-offset-2" >
				<h3 class="h3"><strong>Precio:</strong></h3>
			</div>

			{{-- <div class="col-sm-12 col-md-3 ">

				<h3 class="h3 text-justify ">
					{{$producto[0]->precio}}
				</h3>
					
			</div> --}}
			
		</div>


		 
		<div class="row">

			<div class="col-sm-12 col-md-3 col-md-offset-2" >
				<h3 class="h3"><strong>stock:</strong></h3>
			</div>

			{{-- <div class="col-sm-12 col-md-3 ">

				<h3 class="h3 text-justify ">
					{{$producto[0]->stock}}
				</h3>
					
			</div> --}}
		</div>
				

		<{{-- div class="row">
			<div class="col-xs-6 col-xs-offset-3">
				<a href="/asdasd" class="btn btn-block pull-left boton-azul" role="button"><i class="fa fa-send fa-3x" aria-hidden="true"></i><span style="font-size:20px;">&nbsp; Responder -----</span></a>
	         
	          
	          </div>
	           --}}
          
        </div>

		
</div> 



@endsection


