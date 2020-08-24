@extends('theme.app')

@section('content')

            <div class="page page-forms-common">
                <!-- bradcome -->
                <div class="b-b mb-10">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="h3 m-0">Agregar</h1>
                            <small class="text-muted">Esta sección te permite <strong>agregar un platillo nuevo</strong>.</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>Agregar</strong> platillo</h3>
							</div>
							<div class="boxs-body">
								<form action="{{url('/platillos/guardar')}}" method="post" enctype="multipart/form-data" class="form-horizontal" name="form3" role="form" id="form3" data-parsley-validate>
									{{csrf_field()}}
									<div class="form-group">
										<label class="col-sm-3 control-label">Nombre del platillo</label>
										<div class="col-sm-9">
											<input type="text" class="form-control mb-10" placeholder="P.e.: Pizza de peperoni" data-parsley-trigger="change" name="nombre" id="nombre" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Descripción</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" placeholder="P.e.: Queso, peperoni, salsas." data-parsley-trigger="change" name="descripcion" id="descripcion" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Precio</label>
										<div class="col-sm-9">
											<input type="number" class="form-control" placeholder="P.e.: 90" data-parsley-trigger="change" maxlength="12" name="precio" id="precio" required>
                                        </div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
                                        <label class="col-sm-3 control-label">Fotografía</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="filestyle" data-buttonText="Elegir imagen" name="imagen" id="imagen" data-iconName="fa fa-inbox">
                                        </div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10 checkbox">
                                            <label>
												<input type="checkbox" name="status" id="status" checked="true"> Activar</label>
												<p class="help-block mb-0">Esta opción activará el platillo, sin embargo, para que mostrarlo en el menú público deberás asignarle un menú desde el Catálogo de Menús.</p>
                                        </div>
                                    </div>
									<div class="boxs-footer text-right bg-tr-black lter dvd dvd-top">
										<button type="submit" class="btn btn-raised btn-success" id="form3Submit">Guardar cambios</button>
									</div>
								</form>
							</div>
						</section>
                    </div>
                </div>
            </div>
@endsection