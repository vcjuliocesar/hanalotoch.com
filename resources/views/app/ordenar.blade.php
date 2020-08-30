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

            <div class="page page-forms-wizard">
                <!-- bradcome -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <section class="boxs">
                            <div class="boxs-body">
                            @foreach($negocio as $neg)
                                <a href="https://wa.me/{{$neg->whatsapp}}?text={{urlencode($msg)}}." class="btn btn-success btn-lg btn-block" target="_blank"> <i class="fab fa-whatsapp"></i> Haz click aquí para <br/>realizar tu encargo</i></a> 
                            @endforeach
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