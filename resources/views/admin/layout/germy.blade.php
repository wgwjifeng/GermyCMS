<!DOCTYPE html>
<html>
	<head>
		<title>Germy CMS</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/matrix-style.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/matrix-media.css') }}" />
		<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/jquery.gritter.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/bootstrap-wysihtml5.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/select2.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/germy.css') }}" />
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/jquery.ui.custom.js') }}"></script>
		<script src="{{ asset('js/matrix.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/germy.js') }}"></script>
	</head>
	<body>
		@include('admin.public.header')
		@include('admin.public.nav')
		@include('admin.public.search')
		@include('admin.public.sidebar')
		@yield('content')
		@include('admin.public.footer')
	</body>
    <!--
	<script src="{{ asset('js/excanvas.min.js') }}"></script>
	<script src="{{ asset('js/jquery.peity.min.js') }}"></script>
	<script src="{{ asset('js/fullcalendar.min.js') }}"></script>
	<script src="{{ asset('js/jquery.gritter.min.js') }}"></script>
	<script src="{{ asset('js/matrix.interface.js') }}"></script>
	<script src="{{ asset('js/matrix.chat.js') }}"></script>
	<script src="{{ asset('js/jquery.validate.js') }}"></script>
	<script src="{{ asset('js/jquery.wizard.js') }}"></script>

	<script src="{{ asset('js/select2.min.js') }}"></script>

	<script src="{{ asset('js/matrix.popover.js') }}"></script>
	<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('js/matrix.tables.js') }}"></script>
	<script src="{{ asset('js/matrix.form_validation.js') }}"></script>
	<script src="{{ asset('js/jquery.peity.min.js') }}"></script>
	<script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.toggle.buttons.html') }}"></script>
    <script src="{{ asset('js/masked.js') }}"></script>
    <script src="{{ asset('js/matrix.form_common.js') }}"></script>
    <script src="{{ asset('js/wysihtml5-0.3.0.js') }}"></script>
    <script src="{{ asset('js/bootstrap-wysihtml5.js') }}"></script>

    -->

    <script src="{{ asset('js/germy.main.js') }}"></script>
</html>
