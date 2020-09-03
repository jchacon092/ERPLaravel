@extends('layout.layout') @section('title','Editar Empresa') @section('link')
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/app.css">
<link rel="stylesheet" href="../css/fontawesome-all.min.css"> @endsection @section('content')
<form role="form" method="POST" action='{{ url("actualizarasignacion/{$asignacion->id_asignacion}")}}'>
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nombre" class="col-form-label"> <span style="color:red;">*</span> Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$asignacion->nombre_cadena}}">
    </div>
    <div class="form-group">
        <label for="Propietario" class="col-form-label"><span style="color:red;">*</span> Dirección:</label>
        <input type="text" class="form-control" name="Propietario" id="Propietario" value="{{$asignacion->propietario_asignacion}}">
    </div>
    <div class="form-group">
        <label for="Telefono" class="col-form-label"><span style="color:red;">*</span> Teléfono:</label>
        <input type="text" class="form-control" name="Telefono" id="Telefono" value="{{$asignacion->telefono_asignacion}}">
    </div>
    <div class="form-group">
        <label for="Email" class="col-form-label"><span style="color:red;">*</span> Email:</label>
        <input type="email" class="form-control" name="Email" id="Email" value="{{$asignacion->email_asignacion}}">
    </div>
    <div class="modal-footer">
        <a class="btn btn-danger" href='{{ url("empresa") }}' role="button">Cancelar <i class="fas fa-times"></i></a>
        <button type="submit" class="btn btn-primary">Modificar <i class="fas fa-edit"></i></button>
    </div>
</form>
@endsection