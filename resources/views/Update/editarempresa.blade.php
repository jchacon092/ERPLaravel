@extends('layout.layout') @section('title','Editar Sucursal') @section('link')
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/app.css">
<link rel="stylesheet" href="../css/fontawesome-all.min.css"> @endsection @section('content')
<form role="form" method="POST" action='{{ url("actualizarsucursal/{$empresa->id_empresa}")}}'>
    {{ csrf_field() }}
    <div class="form-group">
        <label for="Asignacion" class="col-form-label"> <span style="color:red;">*</span> Id_asignacion:</label>
        <input type="text" class="form-control" name="
        " id="Asignacion" value="{{$empresa->id_asignacion}}">
    </div>
    <div class="form-group">
        <label for="Sucursal" class="col-form-label"> <span style="color:red;">*</span> Nombre:</label>
        <input type="text" class="form-control" name="Sucursal" id="Sucursal" value="{{$empresa->nombre_empresa}}">
    </div>
    <div class="form-group">
        <label for="Telefono" class="col-form-label"><span style="color:red;">*</span> Teléfono:</label>
        <input type="text" class="form-control" name="Telefono" id="Telefono" value="{{$empresa->telefono_empresa}}">
    </div>
    <div class="form-group">
        <label for="Ciudad" class="col-form-label"><span style="color:red;">*</span> Ciudad:</label>
        <input type="text" class="form-control" name="Ciudad" id="Ciudad" value="{{$empresa->ciudad_empresa}}">
    </div>
    <div class="form-group">
        <label for="Direccion" class="col-form-label"><span style="color:red;">*</span> Direccion:</label>
        <input type="text" class="form-control" name="Direccion" id="Direccion" value="{{$empresa->direccion_empresa}}">
    </div>
    <div class="form-group">
        <label for="Central" class="col-form-label"><span style="color:red;">*</span> Central:</label>
        <input type="number" class="form-control" name="Central" id="Central" value="{{$empresa->central_empresa}}">
    </div>
    <div class="form-group">
        <label for="Estado" class="col-form-label"><span style="color:red;">*</span> Estado:</label>
        <input type="number" class="form-control" name="Estado" id="Estado" value="{{$empresa->estado_empresa}}">
    </div>
    <div class="modal-footer">
        <a class="btn btn-danger" href='{{ url("sucursal") }}' role="button">Cancelar <i class="fas fa-times"></i></a>
        <button type="submit" class="btn btn-primary">Modificar <i class="fas fa-edit"></i></button>
    </div>
</form>
@endsection