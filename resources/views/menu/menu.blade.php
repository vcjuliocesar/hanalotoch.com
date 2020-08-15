<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Hanal Otoch | Menú digital</title>

    <link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet"
        type="text/css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/js/jquery.smartWizard.min.js" type="text/javascript">
    </script>


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
    
    <script src="js/jquery.steps.js"></script>
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
        <form action="revisar" method="post">
            {{csrf_field()}}
            <div id="smartwizard">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#step-1">
                                Paso 1: Selecciona
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#step-2">
                                Paso 2: Datos de envío
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#step-3">
                                Step 3: Disfruta
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                            <div class="card-deck mb-3 text-center">
                                <table class="table">
            <thead>
                <tr>
                    
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
                    
                    <td>{{$platillo->nombre}}</td>
                    <td>{{$platillo->descripcion}}</td>
                    <td>${{$platillo->precio}}</td>
                    <td>
                        <img src="{{ asset('storage').'/'.$platillo->imagen}}" alt="" width="75">
                    </td>
                    <td>
                        
                            <select class="form-control" id="{{$loop->iteration}}" name="{{$platillo->id}}">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                        
                        
                         
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
                                
                            </div>
                        </div>
                        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="Nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="contacto">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="Celular">Celular</label>
                                        <input type="text" class="form-control" id="celular" name="celular">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="Calle">Calle</label>
                                        <input type="text" class="form-control" id="calle" name="calle">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="Numero">Número</label>
                                        <input type="text" class="form-control" id="numero" name="numero">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="Numero">Colonia</label>
                                        <input type="text" class="form-control" id="colonia" name="colonia">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="Referencias">Referencias</label>
                                        <input type="text" class="form-control" id="referencia" name="referencia">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                            <button type="submit" class="btn btn-success btn-lg btn-block"><i class="fab fa-whatsapp"></i> Haz click aquí para ordenar</button>
                        </div>
                    </div>
            </div>
        </form>
    
        
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
<script type="text/javascript">
        $(document).ready(function () {

            $('#smartwizard').smartWizard();

        });
    </script>
</body>
</html>
