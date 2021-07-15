<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Britishonline9 Admin</title>
		<link rel="" sizes="180x180" href="{{ asset('admin/images/logo.png') }}">
		<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/images/logo.png') }}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/logo.png') }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('admin/styles/style.css')}}">
        <link rel="stylesheet" href="{{asset('admin/styles/media.css')}}">
		<link rel="stylesheet" href="{{asset('admin/styles/icon-font.min.css')}}">
		<link rel="stylesheet" href="{{asset('admin/styles/icon-font.css')}}">
		<link rel="stylesheet" href="{{asset('admin/styles/core.min.css')}}">
		<link rel="stylesheet" href="{{asset('admin/styles/core.css')}}">
		<link rel="stylesheet" href="{{asset('admin/vendors/styles/icon-font.min.css')}}">
		<!-- <link rel="stylesheet" href="{{asset('admin/styles/font-awesome.min.css')}}"> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	</head>
	<body>
		@include('admin.includes.header')
		@include('admin.includes.sidebar')
		<div class="main-container">
			@yield('content')
		</div>
		<script src="{{ asset('admin/vendors/scripts/core.js') }}"></script>
  		<script src="{{asset('admin/vendors/scripts/script.min.js')}}"></script>
	</body>
</html>