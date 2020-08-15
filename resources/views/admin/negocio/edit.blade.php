@extends('layouts.app')

@section('content')
<div class="container">
<div class="card mb-4 shadow-sm">
<div class="card-header">
            <p class="h3 text-center">Mi negocio EDITAR</p>
        </div>
<div class="card-body">
    <form>
    <div class="form-group">
        <label for="NombreAdmin">Nombre de tu negocio</label>
        <input type="text" class="form-control" id="nombreAdmin">
    </div>
    <div class="form-group">
        <label for="NombreAdmin">Contacto de Whatsapp</label>
        <input type="text" class="form-control" id="whatsapp">
        <small id="emailHelp" class="form-text text-muted">Con éste contacto de Whatsapp tus clientes te ordenarán tus pedidos.</small>
    </div>
    <div class="input-group mb-3">
        <div class="custom-file">
            <label for="Portada">Portada</label>
            <input type="file" class="custom-file-input" id="inputGroupFile02">
            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Elige una imagen de portada</label>
        </div>
        <div class="input-group-append">
            <span class="input-group-text" id="inputGroupFileAddon02">Subir</span>
        </div>
    </div>
    <div class="input-group mb-3">
        <div class="custom-file">
            <label for="Portada">Logotipo</label>
            <input type="file" class="custom-file-input" id="inputGroupFile02">
            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Sube el logotipo de tu negocio</label>
        </div>
        <div class="input-group-append">
            <span class="input-group-text" id="inputGroupFileAddon02">Subir</span>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
    </div>
</div>
@endsection
