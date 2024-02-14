<!DOCTYPE html>
<style>
	@font-face {
		font-family: 'tommy1'; /* Nombre personalizado para la fuente */
		src: url("{{asset('font/MADE_TOMMY/MADE TOMMY Thin_PERSONAL USE.otf')}}") format('truetype'); /* Ruta a la fuente en tu proyecto */
		}

		@font-face {
		font-family: 'tommy2'; /* Nombre personalizado para la fuente */
		src: url("{{asset('font/MADE_TOMMY/MADE TOMMY Light_PERSONAL USE.otf')}}") format('truetype'); /* Ruta a la fuente en tu proyecto */
		}

		@font-face {
		font-family: 'tommy3'; /* Nombre personalizado para la fuente */
		src: url("{{asset('font/MADE_TOMMY/MADE TOMMY Regular_PERSONAL USE.otf')}}") format('truetype'); /* Ruta a la fuente en tu proyecto */
		}

		@font-face {
		font-family: 'tommy4'; /* Nombre personalizado para la fuente */
		src: url("{{asset('font/MADE_TOMMY/MADE TOMMY Medium_PERSONAL USE.otf')}}") format('truetype'); /* Ruta a la fuente en tu proyecto */
		}

		@font-face {
		font-family: 'tommy5'; /* Nombre personalizado para la fuente */
		src: url("{{asset('font/MADE_TOMMY/MADE TOMMY Black_PERSONAL USE.otf')}}") format('truetype'); /* Ruta a la fuente en tu proyecto */
		}

		@font-face {
		font-family: 'tommy6'; /* Nombre personalizado para la fuente */
		src: url("{{asset('font/MADE_TOMMY/MADE TOMMY Bold_PERSONAL USE.otf')}}") format('truetype'); /* Ruta a la fuente en tu proyecto */
		}

		@font-face {
		font-family: 'tommy7'; /* Nombre personalizado para la fuente */
		src: url("{{asset('font/MADE_TOMMY/MADE TOMMY ExtraBold_PERSONAL USE.otf')}}") format('truetype'); /* Ruta a la fuente en tu proyecto */
		}

		@font-face {
		font-family: 'gotan1'; /* Nombre personalizado para la fuente */
		src: url("{{asset('font/Gotham_HTF/GothamHTF-Ultra.ttf')}}") format('truetype'); /* Ruta a la fuente en tu proyecto */
		}

		@font-face {
		font-family: 'gotan2'; /* Nombre personalizado para la fuente */
		src: url("{{asset('font/Gotham_HTF/GothamHTF-Book.ttf')}}") format('truetype'); /* Ruta a la fuente en tu proyecto */
		}

		@font-face {
		font-family: 'gotan3'; /* Nombre personalizado para la fuente */
		src: url("{{asset('font/Gotham_HTF/GothamHTF-Medium.ttf')}}") format('truetype'); /* Ruta a la fuente en tu proyecto */
		}

		@font-face {
		font-family: 'gotan4'; /* Nombre personalizado para la fuente */
		src: url("{{asset('font/Gotham_HTF/GothamHTF-Bold.ttf')}}") format('truetype'); /* Ruta a la fuente en tu proyecto */
		}

		@font-face {
		font-family: 'gotan5'; /* Nombre personalizado para la fuente */
		src: url("{{asset('font/Gotham_HTF/GothamHTF-Black.ttf')}}") format('truetype'); /* Ruta a la fuente en tu proyecto */
		}
		
</style>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	{{-- <title> @yield('title') | Dashboard | {{ env('APP_NAME')}}</title> --}}
	<title>{{$config->title }}</title>
	<link rel="icon" type="image/jpg" href="{{asset("/img/design/Home/logo.png")}}"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
			{{-- Estilos de slicks --}}
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	@yield('cssExtras')
		@yield('jsLibExtras')
		@yield('styleExtras')
</head>
<body style="">
	<div class="">
		<header>

			@include('layouts.partials.header')
			
		</header>

		<main class="my-5 d-flex justify-content-center align-items-center">
			<div class="d-flex justify-content-center align-items-center container-fluid" style="padding-top: 120px">
				<div class="container m-0 ">
					<div class="row justify-content-center">
						@include('layouts.partials_dash.sidebar')
						<div class="col-12 col-md-12 col-lg-10 ms-0 ms-md-0 ms-ls-4 d-flex flex-column">
							<div class="card" style="border-radius: 12px; min-height: ;">
								@yield('content')
							</div>
								@yield('content2')
						</div>
					</div>
				</div>
				
			</div>
		</main>
		@include('layouts.partials.footer')
	</div>

	<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/general.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script type="text/javascript" src="{{asset('js/vendor/tinymce/tinymce.min.js')}}"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	{{-- <script type="text/javascript" src="{{asset('js/dash.js')}}"></script> --}}

	{!! Toastr::message() !!}

	@yield('jsLibExtras2')

	@yield('jqueryExtra')

</body>
</html>
