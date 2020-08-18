@extends('layouts.app')

@section('content')
<div class="container">
<div class="card mb-4 shadow-sm">
        <div class="card-header">
            <p class="h3 text-center">Agregar nuevo platillo</p>
        </div>
        <div class="card-body">
<form action="{{ url('/platillos/actualizar/'.$platillo->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{method_field('PATCH')}}
    <div class="row">
        <div class="col-sm">
        <div class="form-group">
            <label for="Nombre">{{'Nombre'}}</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{$platillo->nombre}}">
        </div>
        </div>
        <div class="col-sm">
        <div class="form-group">
            <label for="Descripción">{{'Descripción'}}</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$platillo->descripcion}}">
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
        <div class="form-group">
            <label for="Precio">{{'Precio'}}</label>
            <input type="number" class="form-control" name="precio" id="precio" value="{{$platillo->precio}}">
        </div>
        </div>
        <div class="col-sm">
        <div class="form-group">
            <label for="Imagen">{{'Imagen'}}</label>
            <br/>
            <img src="{{ asset('storage').'/'.$platillo->imagen}}" alt="" width="100">
            <br/>
            <input type="file" class="form-control" name="imagen" id="imagen" value="">
        </div>
        </div>
    </div>
    <input type="submit" value="Actualizar">
</form>
</div>
@endsection
