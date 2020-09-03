@extends('layout.layout') @section('title','Editar Categoria') @section('link')
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/app.css">
<link rel="stylesheet" href="../css/fontawesome-all.min.css"> @endsection @section('content')
<form role="form" method="POST" action='{{ url("actualizarcategoria/{$categoria->id_categoria}")}}'>
    {{ csrf_field() }}
    <div class="form-group">
        <label for="Asignacion" class="col-form-label"> <span style="color:red;">*</span> Nombre de categoria:</label>
        <input type="text" class="form-control" name="Asignacion" id="Asignacion" value="{{$categoria->nombre_categoria}}">
    </div>
    <label for="Estado" class="col-form-label"><span style="color:red;">*</span> Estado:</label>
    <input type="number" class="form-control" name="Estado" id="Estado" value="{{$categoria->estado_categoria}}">
    </div>
    <div class="modal-footer">
        <a class="btn btn-danger" href='{{ url("categoria") }}' role="button">Cancelar <i class="fas fa-times"></i></a>
        <button type="submit" class="btn btn-primary">Modificar <i class="fas fa-edit"></i></button>
    </div>
</form>
@endsection