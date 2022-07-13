@extends('layouts.vistaPadre')

@section('css')
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo asset('css/micss.css')?>" type="text/css"> 
@endsection('css')

@section('contenidoPrincipal')

<a href="categorias/create" class="btn btn-success mb-3 mx-2">Añadir nueva categoria</a>
<table id="categorias" class="table table-hover table-bordered mx-2">
  <thead class="table-secondary">
    <tr>
    	<th scope="col">#ID</th>
    	<th scope="col">Nombre de la categoria</th>
    	<th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($categorias as $categoria)
  	<tr>
  		<td>{{$categoria->id}}</td>
  		<td>{{$categoria->nombre_categoria}}</td>
  		<td style="width:10%">
  			<form action="{{url ('categorias/destroy',$categoria->id)}}" method="POST">
          <a href="categorias/edit/{{$categoria->id}}" type="button" class="btn btn-warning">Editar</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar la categoría? Si hay productos pertenecientes a esta categoría tambien se eliminaran.')">Eliminar</button>
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
    $('#categorias').DataTable({
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