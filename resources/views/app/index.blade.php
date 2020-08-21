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
													<strong>Hamburguesa</strong>.<br/>
													Carne angus, queso, tocino, guacamole.<br/>
													<strong>$70.00</strong>
												</div>
												<div class="col-xs-6 col-md-4">
													<img src="assets/images/hamburguesa.jpg" alt="" style="border-radius: 5%; width: 120px;">
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
													<strong>Brownie</strong>.<br/>
													Sabor chocolate con relleno<br/>
													<strong>$15.00</strong>
												</div>
												<div class="col-xs-6 col-md-4">
													<img src="assets/images/hamburguesa.jpg" alt="" style="border-radius: 5%; width: 120px;">
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
										</div>
                                        <div class="tab-pane" id="btab2">
                                            <section class="boxs">
                                                <!-- boxs header -->
                                                
                                                <div class="boxs-body">
                                                    
                                                    <form name="form2" role="form" id="form2" data-parsley-validate>
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="name">Nombre: </label>
                                                                <input type="text" name="name" id="name" class="form-control" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="name">Celular: </label>
                                                                <input type="number" name="celular" id="celular" class="form-control" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Calle">Calle: </label>
                                                                <input type="text" name="calle" id="calle" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Numero">Número: </label>
                                                                <input type="number" name="numero" id="number" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Numero">Colonia: </label>
                                                                <input type="text" name="colonia" id="colonia" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="Numero">Referencias: </label>
                                                                <input type="text" name="referencias" id="referencias" class="form-control">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="tab-pane" id="btab3">
                                            <section class="boxs">
                                                <div class="boxs-body">
                                                    <div class="col-md-3 col-md-offset-3">
                                                        <button type="button" class="btn btn-raised btn-success">Haz click aquí para procesar tu pedido.</button> 
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
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
                        </section>
                    </div>
                    
                </div>

                <!-- page content -->

            </div>
						
@endsection