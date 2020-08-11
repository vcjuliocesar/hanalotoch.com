@extends('layouts.app')

@section('content')
<div class="container">
    
        
        
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <p class="h3 text-center">Catálogo de platillos</p>
        </div>
        <div class="card-body">
        <table class="table">
            
            <thead>
                <tr>
                    <th scope="col">Nombre del platillo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Pizza hawaiana con queso</th>
                    <td>pizza con queso, piña, peperoni y salami</td>
                    <td>$150.00</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm">
                            <i class="fas fa-edit"></i>Editar
                        </button>  
                        <button type="button" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i>Borrar
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Harburguesa de la casa</th>
                    <td>Pastor, queso, salsa especial</td>
                    <td>$70.00</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm">
                            <i class="fas fa-edit"></i>Editar
                        </button>  
                        <button type="button" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i>Borrar
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Coca cola 2Lt</th>
                    <td>Refresco</td>
                    <td>$30.00</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm">
                            <i class="fas fa-edit"></i>Editar
                        </button>  
                        <button type="button" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i>Borrar
                        </button>
                    </td>
                </tr>
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
