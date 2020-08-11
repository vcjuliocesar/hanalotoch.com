@extends('layouts.app')

@section('content')
<div class="container">
<div class="card mb-4 shadow-sm">
<div class="card-header">
            <p class="h3 text-center">Mi cuenta</p>
        </div>
<div class="card-body">
<form>
  <div class="form-group">
    <label for="NombreAdmin">Nombre del administrador</label>
    <input type="text" class="form-control" id="nombreAdmin">
  </div>
  <div class="form-group">
    <label for="Correo">Correo electrónico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo electrónico con nadie más.</small>
  </div>
  <div class="form-group">
    <label for="Password">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
</div>
</div>
@endsection