@extends('theme.public')

@section('content')

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
                                                    <a href="#btab2" data-toggle="tab">Domicilio</a>
                                                </li>
                                                <li class="">
                                                    <a href="#btab3" data-toggle="tab">Disfruta</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="bar" class="progress progress-striped active">
                                        <div class="bar progress-bar progress-bar-orange" style="width: 0%;" role="progressbar"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="btab1">
											<div class="row">
												<div class="col-xs-6 col-md-4">
													Frijol con puerco.<br/>
													Rico frijol con puerco, con arroz y tortilla.<br/>
													<strong>$70.00</strong>
												</div>
												<div class="col-xs-6 col-md-4">
													<img src="assets/images/profile-photo.jpg" alt="" style="border-radius: 5%">
												</div>
												<div class="col-xs-6 col-md-4">Seleccione cantidad:<br/>
													<select class="form-control" id="producto-id" name="producto-id">
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
											<div class="row">
												<div class="col-xs-6 col-md-4">
													1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</div>
												<div class="col-xs-6 col-md-4">
													FOTO. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</div>
												<div class="col-xs-6 col-md-4">
													<select class="form-control" id="producto-id" name="producto-id">
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
										</div>
                                        <div class="tab-pane" id="btab2">2. Lorem Ipsum is sim and typesetting industry. </div>
                                        <div class="tab-pane" id="btab3">3. Lorem Ipsum is simply dummy text of the print typesetting industry. </div>
                                        
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
                            </div>
                        </section>
                    </div>
                    
                </div>

                <!-- page content -->

            </div>
						
@endsection