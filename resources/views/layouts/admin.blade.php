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
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <script src="{{ asset('js/ajax.js') }}"></script>

    <style>

    </style>

    @yield('extraCSS')
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-12 col-12 mx-auto">
                @include('layouts.partials_admin.header')
            </div>
            <div class="col-xxl-10 col-xl-10 col-lg-9 col-md-8 col-sm-12 col-12 mx-auto">
                <div class="row">
                    <div class="col-11 mx-auto">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! Toastr::message() !!}

    @yield('extraJS')

</body>
</html>
