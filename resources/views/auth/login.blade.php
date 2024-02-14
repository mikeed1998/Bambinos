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

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="{{$config->description}}" />

		<title>{{$config->title }}</title>
		<link rel="icon" type="image/jpg" href="{{asset("/img/design/Home/logo.png")}}"/>

		{{-- Estilos de bootstrap --}}
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		{{-- Estilos de slicks --}}
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		{{-- Iconos de font awesone --}}
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		{{-- Estilos propios de nosotros --}}
		<link rel="stylesheet" href="{{asset('css/main.css')}}">
		{{-- Script de notificaciones toastr --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		{{-- Script de Jquery --}}
		<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>

		{{-- message toastr --}}
		<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
		<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
		<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

		@yield('jsLibExtras')
		@yield('cssExtras')
		@yield('styleExtras')
	</head>
	<body>

		<style>

			.inp-frm{
				color: #ffffff; 
				background-color: #313131; 
				text-align: center;
				border: solid #ffffff;
				border-radius: 26px;
				padding: 15px 0px 15px 0px;
			}
		
			.inp-frm::placeholder{
				color:#ffffff !important;
				text-align: center;
			}
		
			.buton-login-enter{
				color: #8a8a8a; 
				padding: 5px 0px 5px 0px ; 
				background: transparent; 
				border-radius: 26px; 
				border:solid #8a8a8a;
				transition: 0.2s ease;
			}

			.buton-login-enter:hover{
				color: #000000; 
				padding: 5px 0px 5px 0px ; 
				background: #ffffff; 
				border-radius: 26px; 
				border:solid #ffffff;
			}
		</style>
		
		
		<div class="col-12 px-4 d-flex flex-wrap align-items-center" style="background-color: #313131; height: 100%;">
			<div class="col-12 d-flex justify-content-center flex-column">
			<div class="col-12 d-flex justify-content-center align-items-center">
				<a href="{{route('front.index')}}"><img src="{{asset('img/design/Sektor/dashboard/rh_logo.png')}}" alt=""></a>
			</div>
			<div class="d-flex col-12 justify-content-center ">
					<div class="col-12 col-md-7 col-lg-4 card my-5 py-5 px-4" style="border-radius:26px; ; border:solid #ffffff ; background-color: #313131">
						<div class="row">
							<div class="col-12">
								<div class="card-body">
									<h5 class="text-center" style="font-family: tommy3; font-size: 2rem ;color:#ffffff">{{ __('INICIAR SESION') }}</h5>
									<form method="POST" action="{{ route('login') }}">
										@csrf
										<div class="form-group mb-3 mt-4">
											<div class="d-flex justify-content-center">
												<input placeholder="Correo" id="email" type="email" class="col-10 inp-frm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="" autofocus>
												@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
												@enderror
											</div>
										</div>
		
										<div class="form-group">
											<div class="d-flex justify-content-center">
												<input placeholder="Contraseña" id="password" type="password" class="col-10 inp-frm @error('password') is-invalid @enderror" name="password" style="" required autocomplete="current-password">
												@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
												@enderror
											</div>
										</div>
		
										<div class="form-group row mb-0 d-flex justify-content-cente mt-2">
											<div class="d-flex justify-content-center text-center flex-wrap">
												<button type="submit" class="col-10 mt-3 buton-login-enter" style="">
													{{ __('Entrar') }}
												</button>
		
											</div>
										</div>
									</form>
		
									<p class="card-text text-center">
										<a href="{{ route('register') }}" class="btn btn-sm btn-primary px-4 py-1" style="background: transparent; border-radius: 16px; border:none;">
											{{ __('Regístrate aquí') }}
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/general.js')}}"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		{!! Toastr::message() !!}
		@yield('jsLibExtras2')

		{{-- {{$carrito}} --}}
		@yield('jqueryExtra')
	</body>
</html>

