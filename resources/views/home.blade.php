@extends('adminlte::layouts.app')

<!-- borrar si es que no sale la home bien -->
@section('htmlheader_title')
    Home
@endsection
<!-- fin borrar -->


@section('css')
<style>
    .sidebar-home
        {
            color: #f39c12;
        }
.color-p
 {
            color: #bf9d11;
            size: 28;
        }
         .active>span,.active>
    {
      color: #fff  !important;
      background-color: #bf9d11  !important;
      border-color: #bf9d11  !important;
    }
    .content-wrapper
    {
        background-color: #ffffff;
    }
</style>
@endsection
@section('main-content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
            <div class="panel-heading text-center  color-p " size="28" >
            <strong><i class="fa fa-qq" aria-hidden="true"  ></i>&nbsp; BIENVENIDO &nbsp;<i class="fa fa-qq" aria-hidden="true"  ></i></strong>
                </div>

                <div class="panel-body color-p" >
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
