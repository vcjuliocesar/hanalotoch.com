@extends('theme.app')

@section('content')
            <div class="page bootstrap-page-tables">
                <div class="b-b mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
                            <h1 class="h3 m-0">Asignar Platillos al Menú {{$menu->nombre}}</h1>
                            
							<small class="text-muted">Está a punto de asignar platillos al menú. Puede asignar platillos sin importar si estos se encuentran activos o desactivos. Tenga en cuenta que para que los platillos se muestren en su menú público deberá activarlos desde el catálogo de platillos.</small>
						</div>
					</div>
				</div>
                <div class="row">
					<div class="col-md-12">
						<section class="boxs">
							<!-- boxs header -->
							<div class="boxs-header">
								<h3 class="custom-font hb-blue">
                                    Menú <strong>{{$menu->nombre}}</strong></h3>
							</div>
							<form method="post" action="{{url('/menus/relacionar')}}">
								{{csrf_field()}}
								<input type="hidden" name="menu_id" value="{{$menu->id}}">

								<input class="btn btn-raised btn-success" type="submit" value="Guardar menú">
								<div class="boxs-body p-0">
									<div class="table-responsive">
										<table class="table mb-0" id="usersList">
											<thead>
												<tr>
													<th>Selecionar</th>
													<th>Platillo</th>
													<th>Descripción</th>
												</tr>
											</thead>
											<tbody>
												@foreach($platillos as $platillo)
												<tr>
													<td>
														<div class="checkbox">
															<label>
															@if($menu->platillos->contains($platillo->id))
																<input type="checkbox" name="{{$platillo->id}}" checked>
															@else
															<input type="checkbox" name="{{$platillo->id}}">
															@endif
															</label>
														</div>
													</td>
													<td>
														<img src="{{ asset('storage').'/'.$platillo->imagen}}" alt="{{$platillo->nombre}}" width="36" height="36" style="border-radius: 50%;">
														{{$platillo->nombre}}</td>
													<td>{{$platillo->descripcion}}</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</form>
							<!-- /boxs body -->
						</section>
					</div>
                </div>
            </div>

@endsection