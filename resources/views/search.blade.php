<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>How To Install Vue 3 in Laravel 9 with Vite</title>
</head>

<body>
    <div id="app">
		<my-vue-component :users={{ json_encode($search) }}></my-vue-component>
	</div>
    @vite('resources/js/app.js')
</body>

</html>

{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
