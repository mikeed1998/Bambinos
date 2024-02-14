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
			.error_p{
			border-color:red;
		}
		.success_p{
			border-color:green;
		}
		.form-control:focus{
			border-color:none !important;
			box-shadow:none;
		}

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
	
			<div class="col-12 d-flex justify-content-center align-items-center" style="background-color: #313131; height: 100%;">
				<div class="container d-flex flex-wrap justify-content-center">
					<div class="col-12 d-flex justify-content-center align-items-center" style="margin-bottom: 50px">
						<a href="{{route('front.index')}}"><img src="{{asset('img/design/Sektor/dashboard/rh_logo.png')}}" alt=""></a>
					</div>
					<div class="col-5 d-flex flex-wrap justify-content-center flex-md-row my-md-0" style="border:solid #ffffff;  min-height:; border-radius:26px;">
						<form method="POST" action="{{ route('register') }}" class="col-12 col-md-12  d-flex justify-content-center align-items-center" style="background:;">
							@csrf
							<div class="col-12 p-4 d-flex justify-content-center align-items-center flex-column text-center">
								<h4 class="mb-4 mt-4" style="color: #ffffff; font-family: tommy3; font-size: 2rem">REGISTRATE</h4>
								<div class="input_b col-12 col-md-10 col-lg-10 mb-3">
								<input type="text" class="col-12 inp-frm @error('name') is-invalid @enderror" id="registrodeusuarios" name="name" placeholder="Nombre" style="" required autocomplete="name" autofocus>
								</div>
								<div class="input_b col-12 col-md-10 col-lg-10 mb-3">
									<input type="text" class="col-12 inp-frm @error('lastname') is-invalid @enderror" id="registrodeusuarios" name="lastname" placeholder="Apellido" style="background-size: " required autocomplete="lastname" autofocus>
									</div>
								<div class="col-12 col-md-10 col-lg-10 mb-3">
								<input type="email" class="col-12 inp-frm @error('email') is-invalid @enderror" id="email" name="email" placeholder="Example@email.com" style="">
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong> 
								</span>
								@enderror
								</div>
								<div class="col-12 col-md-10 col-lg-10 mb-3 ">
								<input type="password" class="col-12 inp-frm @error('password') is-invalid @enderror" id="password" name="password" placeholder="Contraseña" style=";" required autocomplete="email">
								<p id="msj_error" class="mb-0 mt-1" style="color:red; display:none;">Contraseña bastante corta</p>
								</div>
								<div class="col-12 col-md-10 col-lg-10 mb-3">
								<input type="password" class="col-12 inp-frm" id="password_verify" placeholder="Confirma contraseña" name="password_confirmation" style=";" required autocomplete="new-password">
								<p id="msj_error2" class="mb-0 mt-1" style="color:red; display:none;">La contraseña no coincide</p>
								</div>
								<div class="col-12 col-md-10 col-lg-10 mb-3 d-flex justify-content-center align-items-center flex-column">
									<button id="register_btn" class="col-12 buton-login-enter" style="" disabled>Registrarme</button>
								</div>
								<div class="col-12 col-md-10 col-lg-10 ">
									<p style="color: #ffffff">Ya tengo cuenta. <a href="{{url('login')}}" class="" style="color:#ffffff; text-decoration: underline" uk-toggle>Sign in</a></p>
								</div>
							</div>
						</form>
					</div>
			
			
				</div>
	
			<script>	$("#password").change(function() {
				var pass  = $("#password").val();
				var len   = (pass).length;
		
				if(len>6){
					$('#password').addClass("success_p");
					$('#password').removeClass("error_p");
					document.getElementById('msj_error').style.display = 'none';
				}else{
					if(len>0){
					$('#password').addClass("error_p");
					$('#password').removeClass("success_p");
					document.getElementById('msj_error').style.display = 'block';
					}else{
						$('#password').removeClass("success_p");
						$('#password').removeClass("error_p");
						document.getElementById('msj_error').style.display = 'none';
					}
					
					
				}
			});
		
			$("#password_verify").change(function() {
				var pass1  = $("#password").val();
				var pass  = $("#password_verify").val();
				var len   = (pass).length;
		
				if(len>6 && pass1 == pass){
					$('#password_verify').addClass("success_p");
					$('#password_verify').removeClass("error_p");
					document.getElementById('msj_error2').style.display = 'none';
					$('#register_btn').removeAttr('disabled');
				}else{
					if(len>0){
					$('#password_verify').addClass("error_p");
					$('#password_verify').removeClass("success_p");
					document.getElementById('msj_error2').style.display = 'block';
					}else{
						$('#password_verify').removeClass("success_p");
						$('#password_verify').removeClass("error_p");
						document.getElementById('msj_error2').style.display = 'none';
					}
					$('#register_btn').prop('disabled', true);
		
					
				}
			});</script>
	
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

