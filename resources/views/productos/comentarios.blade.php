@extends('layouts.vistaPadre')

@section('css')
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo asset('css/micss.css')?>" type="text/css"> 

@endsection('css')

@section('contenidoPrincipal')

<h2 style="color: #126e1b">Lista de comentarios:</h2>
<ul>
	@foreach ($comentarios as $comentario)	
		<li><b>{{$comentario->autor}} </b>dice: {{$comentario->comentario}}</li>
	@endforeach
</ul>

@endsection