<!DOCTYPE html>
<html lang="en">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
        
            <title>{{ config('app.name', 'Laravel') }}</title>
        
            <!-- Fonts -->
            <link rel="dns-prefetch" href="//fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

            <!-- Styles -->
            <link href="{{ asset('web/css/app.css') }}" rel="stylesheet">
        </head>
<body>
    <style>
        body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			background: #32855E;
		}
        .user_card {
			height: 510px;
			width: 550px;
			margin-top: auto;
			margin-bottom: auto;
			background: #FFFFFF;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;
		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background: #40830B;
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 100%;
			background:#40830B;
			color: white;
		}
		.login_btn:focus {
			box-shadow: none;
			outline: 0px;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #40830B;
			color: white;
			border: 0;
			border-radius: 0.25rem 0 0 0.25rem;
            width:100%;
		}
     
		.input_user,
		.input_pass:focus {
			box-shadow: none;
			outline: 0px;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #c0392bL;
		}
    </style>
    
    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('web/js/app.js') }}"></script>
</body>
</html>