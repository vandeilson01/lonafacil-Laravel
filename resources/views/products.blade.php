@extends('layouts.app')

@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush

@push('page-header')
<div class="col-sm-7 col-auto">
	<h3 class="page-title">Products</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">Products</li>
	</ul>
</div>
<div class="col-sm-5 col">
	<a href="{{route('add-product')}}" class="btn btn-primary float-right mt-2">Add New</a>
</div>
@endpush

@section('content')
<div class="row">
	<div class="col-md-12">
	
		<!-- Products -->
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="datatable-export" class="table table-hover table-center mb-0">
						<thead>
							<tr>
								<th>Ordem de Serviço</th>
								<th>Modelo da Caçanba</th>
								<th>Medidas</th>
								<th class="action-btn">Ações</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($sales as $sale)
								<tr>
									<td>{{$sale->service_order}}</td>
									<td>{{$sale->bucket_model}}</td>
									<td>{{$sale->measurements}}</td>
									<td>
										<div class="actions">
											<a class="btn btn-sm bg-success-light" href="{{route('edit-product',$sale)}}">
												<i class="fe fe-pencil"></i> Editar
											</a>
											<a data-id="{{$sale->id}}" href="javascript:void(0);" class="btn btn-sm bg-danger-light deletebtn" data-toggle="modal">
												<i class="fe fe-trash"></i> Apagar
											</a>
										</div>
									</td>
								</tr>
								
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /Products -->
		
	</div>
</div>

<!-- Delete Modal -->
<x-modals.delete :route="'products'" :title="'Product'" />
<!-- /Delete Modal -->
@endsection

@push('page-js')
	<!-- Select2 JS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endpush