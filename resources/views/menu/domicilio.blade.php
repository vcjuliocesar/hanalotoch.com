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
    </div>

<div class="container">
    <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <p class="h3 text-center">Agrega tu dirección</p>
        </div>
        <div class="card-body">
        
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="Nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="Celular">Celular</label>
                    <input type="text" class="form-control" id="celular">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="Calle">Calle</label>
                    <input type="text" class="form-control" id="calle">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="Numero">Número</label>
                    <input type="text" class="form-control" id="numero">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="Numero">Colonia</label>
                    <input type="text" class="form-control" id="colonia">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="Referencias">Referencias</label>
                    <input type="text" class="form-control" id="referencia">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Anterior: Domicilio</button>
            </div>
            <div class="col-sm">
            <button type="submit" class="btn btn-success btn-lg btn-block">Siguiente: ORDENAR!</button>
            </div>
        </div>
    </form>
        </div>
        </div>
        
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
