 @extends('layout.layout') @section('title','Editar Proveedor') @section('link')
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/app.css">
<link rel="stylesheet" href="../css/fontawesome-all.min.css"> @endsection @section('content')
<form role="form" method="POST" action='{{ url("actualizarp/{$proveedor->id_proveedor}")}}'>
    {{ csrf_field() }}
    <div class="form-group">
        <label for="proveedor" class="col-form-label"> <span style="color:red;">*</span> Nombre:</label>
        <input type="text" class="form-control" name="proveedor" id="proveedor" value="{{$proveedor->nombre_proveedor}}">
    </div>
    <div class="form-group">
        <label for="direccion" class="col-form-label"><span style="color:red;">*</span> Dirección:</label>
        <input type="text" class="form-control" name="direccion" id="direccion" value="{{$proveedor->direccion_proveedor}}">
    </div>
    <div class="form-group">
        <label for="telefono" class="col-form-label"><span style="color:red;">*</span> Teléfono:</label>
        <input type="text" class="form-control" name="telefono" id="telefono" value="{{$proveedor->telefono_proveedor}}">
    </div>
    <div class="form-group">
        <label for="email" class="col-form-label"><span style="color:red;">*</span> Email:</label>
        <input type="email" class="form-control" name="email" id="email" value="{{$proveedor->email_proveedor}}">
    </div>
    <div class="modal-footer">
        <a class="btn btn-danger" href='{{ url("proveedor") }}' role="button">Cancelar <i class="fas fa-times"></i></a>
        <button type="submit" class="btn btn-primary">Modificar <i class="fas fa-edit"></i></button>
    </div>
</form>
@endsection