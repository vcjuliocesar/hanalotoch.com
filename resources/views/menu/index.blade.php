<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Digital | Hanal Otoch</title>
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
    <!-- Barra superior de login -->
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
    <!-- FIN barra superior de login -->

    <!-- Encabezado del negocio -->
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Lonchería "El Amigo"</h1>
        <p class="lead">La mejor carne al pastor la encuentras aquí.</p>
        <p class="lead">Ordene directamente aquí.</p>
    </div>
    <!-- Fin del encabezado del negocio -->

    <!-- Contenedor del Wizard-->
    <div class="container">
        <!-- Inicia el formulario -->
        <form action="ordenar" method="post">
            {{csrf_field()}} <!-- Seguridad laravel peticiones POST-->
            <div id="smartwizard"> <!-- Inicia mi Wizard-->
                <!-- Encabezados del Wizard -->
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
                <!-- Fin de los encabezados del Wizard-->
                <!-- Contenido del Wizard-->
                <div class="tab-content">
                    <!-- Paso 1. Elegir del menú-->
                    <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                        <div class="card-deck mb-3 text-center">
                        @foreach($platillos as $platillo)
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <img src="{{ asset('storage').'/'.$platillo->imagen}}" alt="{{$platillo->nombre}}" class="img-thumbnail" width="200">
                                    <h4 class="my-0 font-weight-normal">{{$platillo->nombre}}</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">{{$platillo->precio}} <small class="text-muted"></small></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>{{$platillo->descripcion}},</li>
                                    </ul>
                                    Seleccione:
                                    <select class="form-control" id="{{$loop->iteration}}" name="{{$platillo->id}}">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Fin paso 1-->
                    <!-- Paso 2. Dirección de envio-->
                    <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
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
                    </div>
                    <!-- Fin paso 2 -->
                    <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                        <button type="submit" class="btn btn-success btn-lg btn-block"><i class="fab fa-whatsapp"></i> Haz click aquí para ordenar</button>
                    </div>
                </div>
            </div> <!-- Finalizar el Wizard-->
        </form>
        <!-- Fin del formulario-->
    </div>
    <!-- Fin del contenedor del Wizard -->
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
    
    <!-- Script para Wizard. -->
    <script type="text/javascript">
        $(document).ready(function () {

            $('#smartwizard').smartWizard();

        });
    </script>
</body>
</html>