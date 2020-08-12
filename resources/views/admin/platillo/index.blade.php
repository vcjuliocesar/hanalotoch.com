@extends('layouts.app')

@section('content')
@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif 
<div class="container">
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <p class="h3 text-center">Catálogo de platillos</p>
        </div>
        <div class="card-body">
            <a class="btn btn-primary" href="{{ url('/platillos/crear') }}" role="button"><i class="fas fa-hamburger"></i> Nuevo platillo</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre del platillo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Fotografía</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($platillos as $platillo)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$platillo->nombre}}</td>
                    <td>{{$platillo->descripcion}}</td>
                    <td>${{$platillo->precio}}</td>
                    <td>
                        <img src="{{ asset('storage').'/'.$platillo->imagen}}" alt="" width="75">
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-sm">
                                <a class="btn btn-primary" href="{{ url('/platillos/editar/'.$platillo->id) }}" role="button"><i class="fas fa-edit"></i> Editar</a>
                            </div>
                            <div class="col-sm">
                                <form method="post" action="{{ url('/platillos/borrar/'.$platillo->id) }}">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('El borrado no podrá revertirse, ¿Desea borrar?');">
                                        <i class="fas fa-trash-alt"></i> Borrar
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                         
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    
</div>
@endsection
