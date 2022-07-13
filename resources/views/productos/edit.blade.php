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
  <h3 class="h3custom">Editar producto</h3>
</div>
<form action="{{url ('productos/update',$producto->id)}}" method="POST">
	@csrf
	@method('PUT')
  <div class="col-md-6 mx-3 mb-4">
    <label for="" class="form-label">Nombre del producto *</label>
    <input id="nombre_producto" name="nombre_producto" type="text" required class="form-control" value="{{$producto->nombre_producto}}" tabindex="1">
  </div>
  <div class="col-md-6 mx-3 mb-4">
    <label for="" class="form-label">Categoría *</label>
    <select id="categoria" name="categoria" class="form-control" required tabindex="1" class="form-select">
      <option selected disabled value="">Seleccionar...</option>
      @foreach ($categorias as $categoria)
      <option>{{$categoria->nombre_categoria}}</option>
      @endforeach
    </select>
  </div>
  <div class="col-md-6 mx-3 mb-4">
    <label for="" class="form-label">Precio *</label>
    <input id="precio" name="precio" step="any" type="number" required class="form-control" value="{{$producto->precio}}" tabindex="1"> 
    <span id="precioInline" class="form-text">
      Solo números. Para utilizar decimales hacer uso de: ',' (coma) o '.' (punto)
    </span>
  </div>
  <div class="col-md-6 mx-3 mb-4">
    <label for="" class="form-label">Descripción</label>
    <textarea id="descripcion" name="descripcion" type="text" rows="5" class="form-control" tabindex="1">{{$producto->descripcion}}</textarea> 
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