@extends('theme.app')

@section('content')
            <div class="page page-forms-common">
                <!-- bradcome -->
                <div class="b-b mb-10">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="h3 m-0">Editar</h1>
                            <small class="text-muted">Esta sección te permite editar los atributos de tu platillo.</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>Editar</strong> platillo</h3>
							</div>
							<div class="boxs-body">
								<form class="form-horizontal" name="form3" role="form" id="form3" data-parsley-validate>
									<div class="form-group">
										<label class="col-sm-3 control-label">Nombre del platillo</label>
										<div class="col-sm-9">
											<input type="text" class="form-control mb-10" placeholder="P.e.: Pizza de peperoni" data-parsley-trigger="change" required>
										</div>
									</div>
									
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Descripción</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" placeholder="P.e.: Queso, peperoni, salsas." data-parsley-trigger="change" minlength="6" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Precio</label>
										<div class="col-sm-9">
											<input type="number" class="form-control" placeholder="P.e.: 90" data-parsley-trigger="change" maxlength="12" required>
                                            
                                        </div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
                                        <label class="col-sm-3 control-label">Fotografía</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="filestyle" data-buttonText="Elegir imagen" data-iconName="fa fa-inbox">
                                        </div>
                                    </div>
								</form>
							</div>
							<div class="boxs-footer text-right bg-tr-black lter dvd dvd-top">
								<button type="submit" class="btn btn-raised btn-default" id="form3Submit">Guardar cambios</button>
							</div>
						</section>
                    </div>
                </div>
            </div>
@endsection