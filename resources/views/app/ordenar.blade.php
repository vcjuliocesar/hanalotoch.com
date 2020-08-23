@extends('theme.public')

@section('content')


            <div class="page page-forms-wizard">
                <!-- bradcome -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <section class="boxs">
                            <div class="boxs-body">
                                <a href="https://wa.me/529999654413?text={{urlencode($mjs)}}." class="btn btn-success btn-lg btn-block" target="_blank"> <i class="fab fa-whatsapp"></i> Haz click aquí para <br/>realizar tu encargo</i></a> 
                            </div>
                            <hr class="line-dashed full-witdh-line" />
                            <div class="boxs-footer">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4">
                                        <strong>Tu Hanal Otoch</strong>
                                        <ul class="list-unstyled">
                                            <li><a href="{{url('/platillos')}}">Administrar</a></li>
                                            <li>Soporte técnico</li>
                                            <li>¿Qué es HanalOtoch.com?
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