@extends('layouts.app')

@section('content')
<div class="container">
<div class="card mb-4 shadow-sm">
        <div class="card-header">
            <p class="h3 text-center">Agregar nuevo platillo</p>
        </div>
        <div class="card-body">
<form action="{{url('/platillos/guardar')}}" method="post" enctype="multipart/form-data">

    {{csrf_field()}}

    <div class="row">
        <div class="col-sm">
        <div class="form-group">
            <label for="Nombre">{{'Nombre'}}</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="">
        </div>
        </div>
        <div class="col-sm">
        <div class="form-group">
            <label for="Precio">{{'Precio'}}</label>
            <input type="number" class="form-control" name="precio" id="precio" value="">
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
        <div class="form-group">
            <label for="Descripción">{{'Descripción'}}</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" value="">
        </div>
        </div>
        <div class="col-sm">
        <div class="form-group">
            <label for="Imagen">{{'Imagen'}}</label>
            <input type="file" class="form-control" name="imagen" id="imagen" value="">
        </div>
        </div>
    </div>
    


    <input type="submit" value="Guardar">
</form>
</div>
</div>
@endsection