<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Hanal Otoch | Menú digital</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/pricing.css" rel="stylesheet">
  </head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Hanal Otoch</h5>
        @if (Route::has('login'))
            <div class="top-right links">
        @auth
            <a class="btn btn-outline-primary" href="{{ url('/home') }}">Panel</a>
        @else
            <a class="btn btn-outline-primary" href="{{ route('login') }}">Entrar</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}">Registro</a>
        @endif
        @endauth
            </div>
        @endif
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Lonchería "El Amigo"</h1>
        <p class="lead">La mejor carne al pastor la encuentras aquí.</p>
        <p class="lead">Ordene directamente aquí.</p>
    </div>

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
<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
            <img class="mb-2" src="../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2020</small>
        </div>
    <div class="col-6 col-md">
        <h5>Legal</h5>
        <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Aviso de privacidad</a></li>
        </ul>
    </div>
    <div class="col-6 col-md">
        <h5>Sobre HanalOtoch.com</h5>
        <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Rupestre Software Consulting</a></li>
        </ul>
    </div>
    </div>
</footer>
</div>
</body>
</html>
