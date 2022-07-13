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
  <h3 class="h3custom">Cambiar imagen del producto</h3>
</div>
<form action="{{url ('productos/updateImagen',$producto->id)}}" method="POST" role="form" enctype="multipart/form-data">
	@csrf
	@method('PUT')
  <div class="col-md-6 mx-3 mb-4">
    <label for="formFile" class="form-label">Imagen *</label>
    <input name="avatar" class="form-control" type="file" id="formFile">
    <span id="imagenInline" class="form-text">
      El archivo debe ser de un tamaño menor a 1500kb.
    </span>
  </div>
  <div class="col-md-6 mx-3 mb-2">
    <span id="camposObligatorios" class="form-text">
      Los campos marcados con * son obligatorios.
    </span>
  </div>
  <div class="col-md-6 mx-3 mb-4">
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="/productos" class="btn btn-danger mx-2" tabindex="5">Cancelar</a>
  </div>  
</form>

@endsection