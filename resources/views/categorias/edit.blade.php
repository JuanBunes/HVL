@extends('layouts.vistaPadre')

@section('css')
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo asset('css/micss.css')?>" type="text/css"> 
@endsection('css')

@section('contenidoPrincipal')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="mx-3 mb-4">
  <h3 class="h3custom">Editar categoría</h3>
</div>
<form action="{{url ('categorias/update',$categoria->id)}}" method="POST">
	@csrf
	@method('PUT')
  <div class="col-md-6 mx-3 mb-4">
    <label for="" class="form-label">Nombre de la Categoría *</label>
    <input id="nombre_categoria" name="nombre_categoria" type="text" class="form-control" value="{{$categoria->nombre_categoria}}" tabindex="1">
    <span id="nombre_categoriaWarning" class="form-text">
      Se modificaran los productos pertenecientes a esta categoría.
    </span>
  </div>
  <div class="col-md-6 mx-3 mb-2">
    <span id="camposObligatorios" class="form-text">
      Los campos marcados con * son obligatorios.
    </span>
  </div>
  <div class="col-md-6 mx-3 mb-4">
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="/categorias" class="btn btn-danger mx-2" tabindex="5">Cancelar</a>
  </div>
</form>
@endsection