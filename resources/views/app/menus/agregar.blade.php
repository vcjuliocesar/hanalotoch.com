@extends('theme.app')

@section('content')

            <div class="page page-forms-common">
                <!-- bradcome -->
                <div class="b-b mb-10">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="h3 m-0">Agregar</h1>
                            <small class="text-muted">Esta sección te permite <strong>agregar un menú nuevo</strong>.</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>Agregar</strong> menú</h3>
							</div>
							<div class="boxs-body">
								<form action="{{url('/menus/guardar')}}" method="post" enctype="multipart/form-data" class="form-horizontal" name="form3" role="form" id="form3" data-parsley-validate>
									{{csrf_field()}}
									<div class="form-group">
										<label class="col-sm-3 control-label">Nombre del menú</label>
										<div class="col-sm-9">
											<input type="text" id="nombre" name="nombre" class="form-control mb-10" placeholder="P.e.: Menú de desayunos" data-parsley-trigger="change" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Descripción</label>
										<div class="col-sm-9">
											<input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="P.e.: Platillos para desayuno, café, tortas, etc." data-parsley-trigger="change" minlength="6" required>
										</div>
									</div>
									<div class="boxs-footer text-right bg-tr-black lter dvd dvd-top">
										<button type="submit" class="btn btn-raised btn-default" id="form3Submit">Guardar cambios</button>
									</div>								
								</form>
							</div>
							
						</section>
                    </div>
                </div>
            </div>
@endsection