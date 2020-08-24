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
                    <div class="col-md-6">
                        <section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>Editar</strong> platillo</h3>
							</div>
							<div class="boxs-body">
								<form class="form-horizontal" name="form3" role="form" id="form3" action="{{ url('/platillos/actualizar/'.$platillo->id) }}" method="post" enctype="multipart/form-data" data-parsley-validate>
									{{ csrf_field() }}
									{{method_field('PATCH')}}
									<div class="form-group">
										<label class="col-sm-3 control-label">Nombre del platillo</label>
										<div class="col-sm-9">
											<input type="text" class="form-control mb-10" data-parsley-trigger="change" name="nombre" id="nombre"  value="{{$platillo->nombre}}" required>
										</div>
									</div>
									
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Descripción</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" data-parsley-trigger="change" minlength="6" name="descripcion" id="descripcion" value="{{$platillo->descripcion}}" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Precio</label>
										<div class="col-sm-9">
											<input type="number" class="form-control" data-parsley-trigger="change" maxlength="12" name="precio" id="precio" value="{{$platillo->precio}}" required>
                                            
                                        </div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
                                        <label class="col-sm-3 control-label">Fotografía</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="filestyle" data-buttonText="Elegir imagen" data-iconName="fa fa-inbox" name="imagen" id="imagen">
                                        </div>
										<div class="col-sm-3">
											<img src="{{ asset('storage').'/'.$platillo->imagen}}" alt="" width="100">
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