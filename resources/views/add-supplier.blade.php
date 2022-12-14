@extends('layouts.app')

@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
@endpush

@push('page-header')
<div class="col-sm-12">
	<h3 class="page-title">Adicionar Motorista</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">Adicionar Motorista</li>
	</ul>
</div>
@endpush

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body custom-edit-service">
				
		
			<!-- Add Medicine -->
			<form method="post" enctype="multipart/form-data" action="{{route('add-supplier')}}">
				@csrf
				@method("PUT")
				<div class="service-fields mb-3">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Nome<span class="text-danger">*</span></label>
								<input class="form-control" type="text" name="name">
							</div>
						</div>
						<div class="col-lg-6">
							<label>Email<span class="text-danger">*</span></label>
							<input class="form-control" type="text" name="email" id="email">
						</div>
					</div>
				</div>

				<div class="service-fields mb-3">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Telefone<span class="text-danger">*</span></label>
								<input class="form-control" type="text" name="phone">
							</div>
						</div>
						<div class="col-lg-6">
							<label>RG<span class="text-danger">*</span></label>
							<input class="form-control" type="text" name="rg">
						</div>
						<div class="col-lg-6">
							<label>CPF<span class="text-danger">*</span></label>
							<input class="form-control" type="text" name="cpf">
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Endereço <span class="text-danger">*</span></label>
								<input type="text" name="address" class="form-control">
							</div>
						</div>
					</div>
				</div>

				
				<div class="submit-section">
					<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Enviar</button>
				</div>
			</form>
			<!-- /Add Medicine -->


			</div>
		</div>
	</div>			
</div>
@endsection	

@push('page-js')
	<!-- Select2 JS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
	<!-- Datetimepicker JS -->
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>	
@endpush

