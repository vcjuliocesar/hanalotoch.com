@extends('theme.app')

@section('content')

@foreach($negocios as $negocio)

			<div class="page page-forms-common">
                <!-- bradcome -->
                <div class="b-b mb-10">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="h3 m-0">Configuración</h1>
                            <small class="text-muted">Esta sección te permite <strong>cambiar los datos de tu negocio</strong>.</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									Mi<strong> negocio</strong></h3>
							</div>
							<div class="boxs-body">
								<form class="form-horizontal" name="add" role="form" id="add" action="{{ url('/negocio/editar/'.$negocio->id) }}" method="post" enctype="multipart/form-data" data-parsley-validate>
									{{ csrf_field() }}
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Nombre del negocio</label>
										<div class="col-sm-9">
											<input type="text" class="form-control mb-10" id="nombre" name="nombre" value="{{$negocio->nombre}}" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
										<label class="col-sm-3 control-label">Whatsapp</label>
										<div class="col-sm-9">
											<input type="number" class="form-control mb-10" id="whatsapp" name="whatsapp" value="{{$negocio->whatsapp}}" required>
										</div>
									</div>
									<hr class="line-dashed full-witdh-line" />
									<div class="form-group">
                                        <label class="col-sm-3 control-label">Logotipo</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="filestyle" data-buttonText="Elegir imagen" name="logo" id="logo" data-iconName="fa fa-inbox">
                                        </div>
										<div class="col-sm-3">
											<img src="{{ asset('storage').'/'.$negocio->logo}}" alt="" width="100">
										</div>
                                    </div>
									<hr class="line-dashed full-witdh-line" />
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Foto de portada</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="filestyle" data-buttonText="Elegir imagen" name="cover" id="cover" data-iconName="fa fa-inbox">
                                        </div>
										<div class="col-sm-3">
											<img src="{{ asset('storage').'/'.$negocio->cover}}" alt="" width="100">
										</div>
                                    </div>
									<hr class="line-dashed full-witdh-line" />
									<div class="boxs-footer text-right bg-tr-black lter dvd dvd-top">
										<button type="submit" class="btn btn-raised btn-default" id="form3Submit">Guardar cambios</button>
									</div>
								</form>
							</div>
						</section>
                    </div>
					<div class="col-md-6">
						<section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									Mi URL y<strong> QR</strong></h3>
							</div>
							<div class="boxs-body">
								<div class="row">
									<div class="col-md-3">
										{!!QrCode::margin(1)->size(200)->generate(env('APP_URL')) !!}
									</div>
									<div class="col-md-9">
										Hemos creado para tí un código QR que al ser escaneado por tus clientes llevará directamente a tu menú digital. 
										Facilitando el acceso y evitando que ellos tengan que tocar un menú físico, 
										de ésta forma ayudamos a disminuir los contagios por COVID-19.
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										Tu URL es: {{env('APP_URL')}}
									</div>
								</div>
							</div>
						</section>
					</div>
                </div>
            </div>
@endforeach
@endsection