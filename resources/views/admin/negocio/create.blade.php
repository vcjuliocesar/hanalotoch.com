@extends('layouts.app')

@section('content')
<div class="container">
<div class="card mb-4 shadow-sm">
<div class="card-header">
            <p class="h3 text-center">Mi negocio CREAR</p>
        </div>
<div class="card-body">
    <form action="{{url('/negocio/guardar')}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="nombreNegocio">Nombre de tu negocio</label>
        <input type="text" class="form-control" id="nombreNegocio" name="nombre">
    </div>
    <div class="form-group">
        <label for="NombreAdmin">Contacto de Whatsapp</label>
        <input type="text" class="form-control" id="whatsapp" name="whatsapp">
        <small id="emailHelp" class="form-text text-muted">Con éste contacto de Whatsapp tus clientes te ordenarán tus pedidos.</small>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
    </div>
</div>
@endsection
