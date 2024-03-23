<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<style>
    @font-face {
    font-family: 'Mairy Bold';
    src: url('vendor/fonts/Mairy_Bold.otf') format('opentype');
}

a {
  text-decoration: none; /* Elimina el subrayado */
  color: inherit; /* Hereda el color del texto padre */
  /* Agrega cualquier otra propiedad que desees modificar */
}

.vertical-text {
            writing-mode: vertical-rl;
            text-orientation: mixed;
            white-space: nowrap;
            transform: rotate(180deg);
            position: fixed; 
            height: 12rem; 
            width: 3rem; 
            background-color: #6962B1; 
            right: 0; 
            top: 10rem;
            border-top-right-radius: 16px;
            border-bottom-right-radius: 16px;

        }

        .texto-menu{
            color: #ffffff;
            font-family: tommy3;
            font-weight: bold;
        }

        .menu-ham{
            font-size: 2rem;
            transition: ease 0.5s;
        }

        .menu-ham:hover{
            transform: rotate(180deg);
            font-size: 2.5rem;
        }

        .cerrar-sesion{
            color: #ffffff;
            text-align: center;
            font-size: 1.2rem;
            font-family: gotan4;
            padding: 0;
            margin: 0;
        }

        .cerrar-sesion-out{
            color: #ffffff;
            text-align: center;
            font-size: 1.2rem;
            font-family: gotan4;
            padding: 0;
            margin: 0;
        }

        .cerrar-sesion-out:hover{
            color: #4ba361;
            text-decoration: underline;
        }


</style>

<header class="container-fluid" style="position: ; top: 0; z-index: 9999; font-family: 'Mairy Bold';">
    <div class="row" style="z-index: 9999;">
        <div class="cola col position-relative">
            <div class="row" style="margin-top: 2rem; height: 2rem">
                <div class="cola col mx-auto borde-col text-md-end text-center cont-iconos">
                    <a href="#/">
                        <img class="px-2" src="{{asset('img/design/Inicio/whats.png')}}" alt="" style="height: 80%">
                    </a>
                    <a href="#/">
                        <img class="px-2" src="{{asset('img/design/Inicio/insta.png')}}" alt="" style="height: 80%">
                    </a>
                    <a href="#/">
                        <img class="px-2" src="{{asset('img/design/Inicio/face.png')}}" alt="" style="height: 80%">
                    </a>
                    <a href="#/">
                        <img class="px-2" src="{{asset('img/design/Inicio/tiktok.png')}}" alt="" style="height: 80%">
                    </a>
                    <a href="#/">
                        <img class="px-2" src="{{asset('img/design/Inicio/youtube.png')}}" alt="" style="height: 80%">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="cola col-xxl-9 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 py-1 borde-col mx-auto">
                    <div class="row justify-content-center align-items-center" style="margin-bottom: 3rem">
                        <div class="cola col-xxl-8 col-xl-8 col-lg-9 col-md-9 col-sm-9 col-12 borde-col">
                            <div class="row">
                                <div class="cola col-xxl-4 col-xl-5 col-lg-6 col-md-8 col-sm-12 col-12 borde-col px-0">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('img/design/Inicio/logo.png') }}" alt="logo" class="img-fluid" style=" height: 4rem;">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cola col-lg-3 col-md-3 col-sm-3 col-8 mx-auto header-sm">
                            <div class="cola col-lg-6 col-md-8 col-sm-8 col-4 mx-auto borde-col cont-menu">
                                <button type="button" class="link-menu" onclick="activarModalSM()">
                                    <img src="{{ asset('img/header/hamburgerw.png') }}" alt="menu" class="img-fluid img-menu" style="height: 1rem">
                                </button>
                            </div>
                        </div>
                        <div class="cola col-xxl-2 col-xl-2 header-lg borde-col fw-bolder">
                            <div class="cola col-11 text-center borde-col position-relative text-white ">

                                @if (Auth::check())
                                    @if (Auth::user()->role_as == 0) {{-- Middleware para redirigir al panel de cliente --}}
                                        <div class="row">
                                            <div class="col">
                                                <a href="{{ route('user.home') }}" class="link-sesion cerrar-sesion">
                                                    Mi cuenta
                                                </a>
                                            </div>
                                        </div>
                                    @elseif (Auth::user()->role_as == 2) {{-- Middleware para redirigir al panel de vendedor --}}
                                        <div class="row">
                                            <div class="col">
                                                <a href="{{ route('vendedor.home') }}" class="link-sesion cerrar-sesion">
                                                    Mi cuenta
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                    @endif
                                @else
                                    <a href="{{ route('login') }}" class="link-sesion">
                                        INICIAR SESIÓN
                                    </a>
                                @endif

                            </div>
                        </div>
                        <div class="cola col-xxl-1 col-xl-1 header-lg borde-col">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="cola col-xxl-8 col-xl-9 position-relative contenedor-carrito d-flex justify-content-center align-items-center">
                                    @if (Auth::check())
                                        @if (Auth::user()->role_as == 0)
                                        <a href="{{ route('cart.index') }}" class="link-carrito">
                                            <img src="{{ asset('img/header/carrito.png') }}" alt="" class="img-fluid borde-icon img-carrito vertical-shake">
                                        </a>
                                        <div class="cola col-6 text-center position-absolute top-0 translate-middle-y cont-carrito" style="left: 80%">
                                            <span class="badge badge-pill badge-danger fs-5">
                                                {{ array_sum(array_column((array) session('cart'), 'quantity')) }}
                                            </span>
                                        </div>
                                        @endif
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="cola col-xxl-1 col-xl-1 header-lg borde-col">
                            <div class="row">
                                <div class="cola col-12 mx-auto borde-col cont-menu">
                                    <button type="button" class="link-menu" onclick="activarModalLG()">
                                        <div class="col-12 d-flex justify-content-center align-items-center" style="height: 100%; color:#ffffff;" >
                                            <i class="fa-solid fa-bars menu-ham" style=""></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Modal lg -->
    <div class="col-6 menu-modal_lg position-absolute top-0 end-0" style="z-index: 99999; background-color: var(--morado-fondo); pointer-events: auto; overflow-y: auto; height: 61.5rem; -webkit-box-shadow: -8px 0px 9px 0px rgba(0, 0, 0, 0.575); -moz-box-shadow: -8px 0px 9px 0px rgba(0,0,0,0.575);box-shadow: -8px 0px 9px 0px rgba(0,0,0,0.575);">
        <div class="col-12" style="background-size: contain;background-repeat: no-repeat; background-position: center; background-image: url({{asset('img/design/Inicio/patron_menu.png')}}); height: 100%;">
            <div class="row s">
                <div class="col-11 mx-auto text-end">
                    <p class="pt-5 m-0" style="line-height: 1;" onclick="cerrarModalLG()">
                        <i class="bi bi-x-lg p-0 btn-cerrar_modal" style="" ></i>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-11 mx-auto">
                    <div class="row">
                        <div class="col-xxl-9 col-xl-11 mx-auto">
                            <div class="row">
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    @if (Auth::check())
                                        <div class="row">
                                            <div class="col">
                                                <div class="col-12 d-flex justify-content-center align-items-center text-center">
                                                    <a class="cerrar-sesion-out d-flex justify-content-center align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        {{ __('Cerrar sesión') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                
                                <div class="cola col-xxl-5 col-xl-4 header-lg borde-col fw-bolder">
                                    <div class="cola col-11 text-center borde-col position-relative text-white cont-sesion_modal">
                                        @if (Auth::check())
                                            @if (Auth::user()->role_as == 0)
                                                <div class="row">
                                                    <div class="col pb-3">
                                                        <a href="{{ route('user.home') }}" class="link-sesion cerrar-sesion">
                                                            Mi cuenta
                                                        </a>
                                                    </div>
                                                </div>
                                            @elseif (Auth::user()->role_as == 2)
                                                <div class="row">
                                                    <div class="col pb-3">
                                                        <a href="{{ route('vendedor.home') }}" class="link-sesion cerrar-sesion">
                                                            Mi cuenta
                                                        </a>
                                                    </div>
                                                </div>
                                            @else
                                            @endif
                                        @else
                                            <a href="{{ route('login') }}" class="link-sesion">
                                                INICIAR SESIÓN
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="cola col-xxl-3 col-xl-3 header-lg borde-col">
                                    <div class="row">
                                        <div class="cola col-xxl-9 col-xl-9 position-relative contenedor-carrito_modal">
                                            <a href="{{ route('cart.index') }}" class="link-carrito">
                                                <img src="{{ asset('img/header/carrito.png') }}" alt="" class="img-fluid borde-icon img-carrito_modal vertical-shake">
                                            </a>
                                            <div class="cola col-6 text-center position-absolute top-0 translate-middle cont-carrito" style="left: 70%;">
                                                <span class="badge badge-pill badge-danger fs-5">
                                                    {{ array_sum(array_column((array) session('cart'), 'quantity')) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col mt-5">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{route('front.home')}}" class="link-menu_modal">Home</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{route('catalogo')}}" class="link-menu_modal">Catálogo</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#/" class="link-menu_modal">Compra segura</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{route('front.aboutus')}}" class="link-menu_modal">El negocio</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{route('front.contact')}}" class="link-menu_modal">Contacto</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 text-white">
                        <div class="col mt-5">
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6 text-end">
                                    <div class="col-12 texto-modal">
                                        Bosque La Primavera 13 Col. Puerta del Boscque, Zapopan, Jalisco.
                                    </div>
                                    <div class="col-12 texto-modal">
                                        CP. 45066
                                    </div>
                                    <div class="col-12 texto-modal">
                                        Telefonos de contacto:
                                    </div>
                                    <div class="col-12 texto-modal">
                                        3336134420 / 3336580465
                                    </div>
                                    <div class="col-12 mt-3">
                                        <a href="#/">
                                            <i class="borde-icon bi bi-whatsapp text-white icono-modal px-1"></i>
                                        </a>
                                        <a href="#/">
                                            <i class="borde-icon bi bi-instagram text-white icono-modal px-1"></i>
                                        </a>
                                        <a href="#/">
                                            <i class="borde-icon bi bi-facebook text-white icono-modal px-1"></i>
                                        </a>
                                        <a href="#/">
                                            <i class="borde-icon bi bi-tiktok text-white icono-modal px-1"></i>
                                        </a>
                                        <a href="#/">
                                            <i class="borde-icon bi bi-youtube text-white icono-modal px-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-xxl-5 col-xl-4"></div>
                                <div class="col-xxl-7 col-xl-8">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="#/" class="link-menu_modal--2">
                                                Aviso de privacidad
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#/" class="link-menu_modal--2">
                                                Políticas
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#/" class="link-menu_modal--2">
                                                FAQS
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal sm -->
    <div class="col-12 menu-modal_sm position-absolute top-0 end-0 py-5" style="z-index: 9999; background-color: var(--morado-fondo); pointer-events: auto; overflow-y: auto; height: 100vh;">
        <div class="col-11 mb-5 mx-auto">
            <div class="row mt-5">
                <div class="col-11 mx-auto text-end">
                    <p class="p-0 m-0" style="line-height: 1;" onclick="cerrarModalSM()">
                        <i class="bi bi-x-lg p-0 btn-cerrar_modal" style="line-height: 1;" ></i>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-11 mx-auto">
                    <div class="row">
                        <div class="col-lg-11 col-md-11 col-sm-11 col-11 mx-auto">
                            <div class="row">
                                <div class="col-12 text-center pb-3">
                                    @if (Auth::check())
                                        <div class="row">
                                            <div class="col">
                                                <div class="col-12">
                                                    <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        {{ __('Cerrar sesión') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="cola col-lg-4 col-md-4 col-sm-4 col-6 mx-auto header-sm borde-col fw-bolder">
                                    <div class="cola col-11 text-center borde-col position-relative text-white cont-sesion_modal">
                                        @if (Auth::check())
                                            @if (Auth::user()->role_as == 0)
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="{{ route('user.home') }}" class="link-sesion">
                                                            Mi cuenta
                                                        </a>
                                                    </div>
                                                </div>
                                            @elseif (Auth::user()->role_as == 2)
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="{{ route('vendedor.home') }}" class="link-sesion">
                                                            Mi cuenta
                                                        </a>
                                                    </div>
                                                </div>
                                            @else
                                            @endif
                                        @else
                                            <a href="{{ route('login') }}" class="link-sesion">
                                                INICIAR SESIÓN
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="cola col-lg-2 col-md-2 col-sm-3 col-4 mx-auto header-sm borde-col">
                                    <div class="row">
                                        <div class="cola col-lg-9 col-md-9 col-sm-9 col-9 position-relative contenedor-carrito_modal">
                                            <a href="{{ route('cart.index') }}" class="link-carrito">
                                                <img src="{{ asset('img/header/carrito.png') }}" alt="" class="img-fluid borde-icon img-carrito_modal vertical-shake">
                                            </a>
                                            <div class="cola col-6 text-center position-absolute top-0 start-100 translate-middle cont-carrito">
                                                <span class="badge badge-pill badge-danger fs-5">
                                                    {{ array_sum(array_column((array) session('cart'), 'quantity')) }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col mt-5">
                                    <div class="row">
                                        <div class="col">
                                            <a href="#/" class="link-menu_modal">Home</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#/" class="link-menu_modal">Catálogo</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#/" class="link-menu_modal">Compra segura</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#/" class="link-menu_modal">El negocio</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#/" class="link-menu_modal">Contacto</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 text-white">
                        <div class="col mt-5">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-3 col-11"></div>
                                <div class="col-lg-6 col-md-6 col-sm-9 col-11 text-end">
                                    <div class="col-12 texto-modal">
                                        Bosque La Primavera 13 Col. Puerta del Boscque, Zapopan, Jalisco.
                                    </div>
                                    <div class="col-12 texto-modal">
                                        CP. 45066
                                    </div>
                                    <div class="col-12 texto-modal">
                                        Telefonos de contacto:
                                    </div>
                                    <div class="col-12 texto-modal">
                                        3336134420 / 3336580465
                                    </div>
                                    <div class="col-12 mt-3">
                                        <a href="#/">
                                            <i class="borde-icon bi bi-whatsapp text-white icono-modal px-1"></i>
                                        </a>
                                        <a href="#/">
                                            <i class="borde-icon bi bi-instagram text-white icono-modal px-1"></i>
                                        </a>
                                        <a href="#/">
                                            <i class="borde-icon bi bi-facebook text-white icono-modal px-1"></i>
                                        </a>
                                        <a href="#/">
                                            <i class="borde-icon bi bi-tiktok text-white icono-modal px-1"></i>
                                        </a>
                                        <a href="#/">
                                            <i class="borde-icon bi bi-youtube text-white icono-modal px-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#/" class="link-menu_modal--2">
                                                Aviso de privacidad
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#/" class="link-menu_modal--2">
                                                Políticas
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#/" class="link-menu_modal--2">
                                                FAQS
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

<a href="{{route('catalogo')}}" style="z-index: 9999; position: absolute">
    <div class="vertical-text d-flex justify-content-center align-items-center " style="">
    <p class="texto-menu">catálogo online</p>
    </div>
    </a>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- <script src="vendor/fontawesome-free-6.5.1/js/all.js"></script> -->
<script src="https://use.fontawesome.com/005ad652c9.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.carru').slick();
</script>
<script>
    var modallg = document.querySelector('.menu-modal_lg');
    modallg.style.display = "none";
    var modalsm = document.querySelector('.menu-modal_sm');
    modalsm.style.display = "none";

    function activarModalLG() {
        modallg.style.display = "block";
    }

    function cerrarModalLG() {
        modallg.style.display = "none";
    }

    function activarModalSM() {
        modalsm.style.display = "block";
    }

    function cerrarModalSM() {
        modalsm.style.display = "none";
    }


</script>
