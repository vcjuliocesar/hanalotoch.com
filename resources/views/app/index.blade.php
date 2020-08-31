@extends('theme.public')

@section('content')

            @foreach($negocio as $neg)
            <div class="col-md-6 col-md-offset-3" style="box-sizing: border-box;">
            <div class="wrapper">
                <div class="header header-filter" style="background-image: url('{{ asset('storage').'/'.$neg->cover}}'); background-size: cover; background-position: top center; ">
                    <section id="content">    
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <section class="boxs" style="background-color: transparent">
                                    <div class="profile-header">
                                        <div class="profile_info " >
                                            <div class="profile-image">
                                                <img src="{{ asset('storage').'/'.$neg->logo}}" alt="" style="border-radius: 50%; width: 180px;">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        @endforeach
        <section id="content">
            <div class="page page-forms-wizard">
                <!-- bradcome -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <section class="boxs">
                            <div class="boxs-body">
                                <div id="b_rootwizard">
                                    <div class="navbar">
                                        <div class="navbar-inner">
                                            <ul class="nav nav-pills">
                                                <li class="active">
                                                    <a href="#btab1" data-toggle="tab">Elige</a>
                                                </li>
                                                <li class="">
                                                    <a href="#btab2" data-toggle="tab">Ordena</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <form action="ordenar" method="post" role="form" data-parsley-validate>
                                        {{csrf_field()}}
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="btab1">
                                                @foreach($menu as $m)
                                                    @foreach($m->platillos as $platillo)
                                                        <div class="row">
                                                        <div class="col-xs-6 col-md-4">
                                                            <strong>{{$platillo->nombre}}</strong>.<br/>
                                                            {{$platillo->descripcion}}<br/>
                                                            <strong>${{$platillo->precio}}</strong>
                                                        </div>
                                                        <div class="col-xs-6 col-md-4">
                                                            <img src="{{ asset('storage').'/'.$platillo->imagen}}" alt="{{$platillo->nombre}}" style="border-radius: 5%; width: 120px; ">
                                                        </div> <br/>
                                                        <div class="col-xs-6 col-md-4">Seleccione cantidad:<br/>
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
                                                    <hr class="line-dashed full-witdh-line" />
                                                    @endforeach
                                                @endforeach
                                                
                                                
                                            </div>
                                            <div class="tab-pane" id="btab2">
                                                <section class="boxs">
                                                    <!-- boxs header -->
                                                    
                                                    <div class="boxs-body">
                                                        
                                                        
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="name">Nombre: </label>
                                                                    <input type="text" name="contacto" id="contacto" class="form-control" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="name">Celular: </label>
                                                                    <input type="number" name="celular" id="celular" class="form-control" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="Calle">Calle: </label>
                                                                    <input type="text" name="calle" id="calle" class="form-control" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="Numero">Número: </label>
                                                                    <input type="number" name="numero" id="numero" class="form-control" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="Numero">Colonia: </label>
                                                                    <input type="text" name="colonia" id="colonia" class="form-control" required>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="Numero">Referencias: </label>
                                                                    <input type="text" name="referencia" id="referencia" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <button type="submit" class="btn btn-raised btn-success">Procesar pedido</button> 
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- endform-->

                                    <ul class="pager wizard">
                                        <li class="previous disabled">
                                            <a href="javascript:;">Atrás</a>
                                        </li>
                                        <li class="next">
                                            <a href="javascript:;">Siguiente</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="boxs-footer">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4">
                                        <strong>Tu Hanal Otoch</strong>
                                        <ul class="list-unstyled">
                                            <li>¿Qué es HanalOtoch.com?</li>
                                            <li>Soporte técnico</li>
                                            <li><a href="{{url('/platillos')}}">Administrar</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <strong>Sobre nosotros</strong>
                                        <ul class="list-unstyled">
                                            <li>Rupestre Software Consulting</li>
                                            <li>Contáctanos</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <strong>Términos legales</strong>
                                        <ul class="list-unstyled">
                                            <li>Política de privacidad</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    
                </div>

                <!-- page content -->

            </div>
						
@endsection