@extends('adminlte::layouts.app')

<!-- borrar si es que no sale la home bien -->
@section('htmlheader_title')
    Home
@endsection
<!-- fin borrar -->
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <p>Ten un buen Día.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
