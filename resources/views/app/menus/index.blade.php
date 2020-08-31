@extends('theme.app')

@section('content')

<div class="page static-page-tables">
				<!-- bradcome -->
				<div class="b-b mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Catálogo de Menús</h1>
							<small class="text-muted">Si tienes un menú de desayuno y otro para cenas aquí puedes crearlo y asociar qué platillos están en los menús. <br/>Para que un platillo se muestre en el menú público tiene que estar asociado en el menú disponible.</small>
						</div>
					</div>
				</div>

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-green">
									<a href="{{url('/menus/crear')}}" class="btn btn-raised btn-success btn-sm">
										Agregar menú<div class="ripple-container"></div></a>
								</h3>
							</div>
							<div class="boxs-body p-0">
								<div class="table-responsive">
									<table class="table table-middle">
										<thead>
											<tr>
												<th>Menú</th>
												<th>Descripción</th>
												
												<th>Status</th>
												<th>Acciones</th>
											</tr>
										</thead>
										<tbody>
											@foreach($menus as $menu)
											<tr>
												<td class="nowrap">
													
													<strong>{{$menu->nombre}}</strong>
												</td>
												<td class="maw-320">
													<span class="truncate">{{$menu->descripcion}}</span>
												</td>
                                                
												<td>
													@if($menu->status)
														<form method="post" action="{{ url('/menus/desactivar/'.$menu->id) }}">
															{{csrf_field()}}
															{{ method_field('PATCH') }}
															<button type="submit" class="btn btn-danger btn-sm">
																<i class="fas fa-trash-alt"></i> Desactivar
															</button>
														</form>
													@else
														<form method="post" action="{{ url('/menus/activar/'.$menu->id) }}">
															{{csrf_field()}}
															{{ method_field('PATCH') }}
															<button type="submit" class="btn btn-danger btn-sm">
																<i class="fas fa-trash-alt"></i> Activar
															</button>
														</form>
													@endif
														<form method="get" action="{{ url('/menus/asignar/'.$menu->id) }}">
															
															<button type="submit" class="btn btn-danger btn-sm">
																<i class="fas fa-trash-alt"></i> Asignar platillos
															</button>
														</form>
												</td>
												<td>
													<div class="dropdown">
														<a href="#" class="btn btn-simple dropdown-toggle" data-toggle="dropdown">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="{{url('menus/editar/'.$menu->id)}}">Editar</a>
															</li>
															<li>
																<form method="post" action="{{ url('/menus/borrar/'.$menu->id) }}">
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