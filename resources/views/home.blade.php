@extends('layouts.vistaPadre')

@section('css')
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo asset('css/micss.css')?>" type="text/css"> 

@endsection('css')

@section('contenidoPrincipal')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Inicio') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Sesión iniciada! Ahora podés navegar el sitio utilizando la barra de arriba.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
