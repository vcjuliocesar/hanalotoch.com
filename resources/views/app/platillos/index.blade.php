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
												<th>Fecha de registro</th>
												<th>Status</th>
												<th>Acciones</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												
												<td class="nowrap">
													<img src="assets/images/avatar2.png" alt="Jessica Brown" width="36" height="36">
													<strong>Jessica Brown</strong>
												</td>
												<td class="maw-320">
													<span class="truncate">Aliquam viverra, metus eget dictum vestibulum, er.</span>
												</td>
												<td>$100.00</td>
                                                <td>21-Nov-2017</td>
												<td>
													<span class="label label-info label-pill">New</span>
												</td>
												<td>
													<div class="dropdown">
														<a href="#" class="btn btn-simple dropdown-toggle" data-toggle="dropdown">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="platillos/editar">Editar</a>
															</li>
															<li>
																<a href="platillos/borrar">Borrar</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												
												<td class="nowrap">
													<img src="assets/images/avatar3.png" alt="Ruby Dixon" width="36" height="36">
													<strong>Ruby Dixon</strong>
												</td>
												<td class="maw-320">
													<span class="truncate">Praesent ac lobortis libero phasellus.</span>
												</td>
												<td>$80.00</td>
                                                <td>27-Jun-2016</td>
												<td>
													<span class="label label-success label-pill">Closed</span>
												</td>
												<td>
													<div class="dropdown">
														<a href="#" class="btn btn-simple dropdown-toggle" data-toggle="dropdown">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<ul class="dropdown-menu pull-right">
															<li>
																<a href="{{url('platillos/editar')}}">Editar</a>
															</li>
															<li>
																<a href="platillos/borrar">Borrar</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>

@endsection