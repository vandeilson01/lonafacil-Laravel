<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>{{ucfirst($title)}}</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/01.jpg')}}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

		@yield('page-css')

		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div style="border: 1px solid rgba(110, 9, 9, 0.144)">
							<img style="width: 100%;" class="img-fluid" src="{{asset('assets/img/ca.jpg')}}" alt="Logo">
                        </div>
                        <div class="login-right" style="border: 1px solid rgba(110, 9, 9, 0.144)">
							<div class="login-right-wrap">
								@if ($errors->any())
									@foreach ($errors->all() as $error)
										<x-alerts.danger :error="$error" />
									@endforeach
								@endif
								@yield('content')
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->

    </body>
	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	<script src="{{asset('js/app.js')}}"></script>

	@yield('page-js')
</html>
