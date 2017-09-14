@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Añadir Categoria
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

<div class="container">
	
		@foreach($productos as $producto)
		<div class="row">
			<div class="col-sm-12 col-md-4">
				<h2 class="h2 text-center">
					{{$producto->cDescripcionProducto}}
				</h2>
					
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-4">
				<img src="{{ asset('/img/pistola-desintegradora.jpg') }}" class="img-fluid" alt="Sample photo">
			</div>
		</div>	

		
		@endforeach
</div>

@endsection


