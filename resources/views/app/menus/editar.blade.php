@extends('theme.app')

@section('content')

            <div class="page page-forms-common">
                <!-- bradcome -->
                <div class="b-b mb-10">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="h3 m-0">Editar</h1>
                            <small class="text-muted">Esta sección te permite <strong>editar un menú seleccionado</strong>.</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>Editar</strong> menú</h3>
							</div>
							<div class="boxs-body">
								<form class="form-horizontal" name="form3" role="form" id="form3" data-parsley-validate>
									<div class="form-group">
										<label class="col-sm-3 control-label">Nombre del menú</label>
										<div class="col-sm-9">
											<input type="text" class="form-control mb-10" data-parsley-trigger="change" value="{{$menu->nombre}}" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Descripción</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" data-parsley-trigger="change" minlength="6" value="{{$menu->descripcion}}" required>
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