<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Hanal Otoch | Menú digital</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
      
    <a href="https://wa.me/529999654413?text={{urlencode($mjs)}}." class="btn btn-success btn-lg btn-block" target="_blank"> <i class="fab fa-whatsapp"></i> Haz click aquí para realizar tu encargo</i></a> 
    
      
    
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
