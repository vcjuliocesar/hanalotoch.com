@extends('theme.app')

@section('content')

<div class="page static-page-tables">
				<!-- bradcome -->
				<div class="b-b mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Catálogo de <strong>Platillos</strong></h1>
							<small class="text-muted">Aquí puedes llevar un registro de todos los platillos que <strong>TU_NEGOCIO</strong> ofrece.</small>
						</div>
					</div>
				</div>

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-green">
									<a href="{{url('/platillos/crear')}}" class="btn btn-raised btn-success btn-sm">
										Agregar platillo<div class="ripple-container"></div></a>
								</h3>
							</div>
							<div class="boxs-body p-0">
								<div class="table-responsive">
									<table class="table table-middle">
										<thead>
											<tr>
												<th>Platillo</th>
												<th>Descripción</th>
                                                <th>Precio</th>
												<th>Status</th>
												<th>Acciones</th>
											</tr>
										</thead>
										<tbody>
											@foreach($platillos as $platillo)
											<tr>
												<td class="nowrap">
													<img src="{{ asset('storage').'/'.$platillo->imagen}}" alt="{{$platillo->nombre}}" width="36" height="36">
													<strong>{{$platillo->nombre}}</strong>
												</td>
												<td class="maw-320">
													<span class="truncate">{{$platillo->descripcion}}</span>
												</td>
												<td>${{$platillo->precio}}</td>
												<td>
													@if($platillo->status)
														<form method="post" action="{{ url('/platillos/desactivar/'.$platillo->id) }}">
															{{csrf_field()}}
															{{ method_field('PATCH') }}
															<button type="submit" class="btn btn-danger btn-sm">
																<i class="fas fa-trash-alt"></i> Desactivar
															</button>
														</form>
													@else
														<form method="post" action="{{ url('/platillos/activar/'.$platillo->id) }}">
															{{csrf_field()}}
															{{ method_field('PATCH') }}
															<button type="submit" class="btn btn-danger btn-sm">
																<i class="fas fa-trash-alt"></i> Activar
															</button>
														</form>
													@endif
												</td>
												<td>
													<div class="dropdown">
														<a href="#" class="btn btn-simple dropdown-toggle" data-toggle="dropdown">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="{{url('/platillos/editar/'.$platillo->id)}}">Editar</a>
															</li>
															<li>
																<form method="post" action="{{ url('/platillos/borrar/'.$platillo->id) }}">
																	{{csrf_field()}}
																	{{ method_field('DELETE') }}
																	<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('El borrado no podrá revertirse, ¿Desea borrar?');">
																		<i class="fas fa-trash-alt"></i> Borrar
																	</button>
																</form>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>

@endsection