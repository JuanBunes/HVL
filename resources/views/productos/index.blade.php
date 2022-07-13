@extends('layouts.vistaPadre')

@section('css')
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo asset('css/micss.css')?>" type="text/css"> 

@endsection('css')

@section('contenidoPrincipal')

<a href="productos/create" class="btn btn-success mb-3 mx-2">Añadir nuevo producto</a>
<table id="productos" class="table table-hover table-bordered mx-2">
  <thead class="table-secondary">
    <tr>
    	<th scope="col">#ID</th>
    	<th scope="col">Nombre</th>
    	<th scope="col">Categoría</th>
    	<th scope="col">Precio</th>
    	<th scope="col">Imagen</th>
    	<th scope="col">Descripción</th>
      <th scope="col">Comentarios</th>
    	<th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($productos as $producto)
  	<tr>
  		<td style="width:5%">{{$producto->id}}</td>
  		<td style="width:12%">{{$producto->nombre_producto}}</td>
  		<td style="width:12%">{{$producto->categoria}}</td>
  		<td style="width:9%">{{$producto->precio}}</td>
  		<td style="width:15%">
        <a href="https://res.cloudinary.com/huellaverdebd/image/upload/{{$producto->imagen}}" target="_blank" type="button" class="btn btn-success">Ver imagen</a>
        <a href="productos/editImagen/{{$producto->id}}" type="button" class="btn btn-warning">Cambiar Imagen</a>
      </td>
  		<td>{{$producto->descripcion}}</td>
      <td><a href="productos/comentarios/{{$producto->id}}" target="_blank" type="button" class="btn btn-success">Ver comentarios</a></td>
  		<td style="width:10%">
  			<form action="{{url ('productos/destroy',$producto->id)}}" method="POST">
          <a href="productos/edit/{{$producto->id}}" type="button" class="btn btn-warning">Editar</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar el producto?')">Eliminar</button>
        </form>
      </td>
    </tr>

    @endforeach
  </tbody>
</table>

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function() {
    $('#productos').DataTable({
      "columnDefs": [
      { "width": "10%", "targets": 0 }
      ],
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
      }
    });
  } );
</script>
@endsection('js')
@endsection