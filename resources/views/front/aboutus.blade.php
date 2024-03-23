@extends('layouts.app')

@section('title', 'Inicio')
{{-- CABECERAS DE ESTILOS --}}
    @section('cssExtras')


    @endsection
{{-- CABECERAS DE ESTILOS --}}

{{-- ESTILOS CSS PERSONALIZADOS --}}
    @section('styleExtras')
    <style>

        .titulo-nosotros{
            color: #ffffff;
            font-family: gotan4;
            font-size: 4rem;
            display: flex;
            text-align: center;
        }

        .texto-nosotros{
            color: #ffffff;
            font-family: gotan4;
            font-size: 2rem;
            text-align: center;
            margin-top: 3rem;
        }

        .subtexto-nosotros{
            color: #ffffff;
            font-family: tommy2;
            font-size: 1.2rem;
            margin-top: 3rem;
            text-align: center;
            text-wrap: balance;
        }

        .nombre-socio{
            margin-top: 3rem;
            color: #ffffff;
            font-family: gotan4;
            font-size: 2rem;
            line-height: 2rem;
            text-align: center;
            padding-bottom: 6rem;
        }

        .conoceme{
            color: #ffffff;
            font-family: gotan4;
            font-size: 1.2rem;
            line-height: 0.5rem;
        }

        .linea-conoceme{
            height: 0.3rem;
            background-color: #ffffff;
            border-radius: 23px;
        }

        .desc-socio{
            color: #ffffff;
            font-family: tommy2;
            font-size: 1.1rem;
        }

        .titulo-cal{
            font-family: gotan4;
            color: #353352;
            font-size: 3rem;
            text-align: center;
            text-wrap: balance;
        }

        .desc-cal{
            color: #353352;
            font-family: tommy2;
            font-size: 1rem;
            text-align: center;
            margin-top: 3rem;
            margin-bottom: 5rem;
            text-wrap: balance;
        }

        .slick-arrows {
            position: relative;
            margin-top: 2rem; /* Ajusta el margen superior según sea necesario */
            text-align: center; /* Centra las flechas horizontalmente */

        }


        .slick-prev,
        .slick-next {
            width: 4rem;; /* Ancho de las flechas */
            height: 4rem;; /* Altura de las flechas */
            cursor: pointer; /* Cambia el cursor al pasar sobre las flechas */
            margin: 0rem 6rem 0rem 6rem;
        }

        @media only screen and (max-width: 768px){ 
            
        } 

        @media only screen and (max-width: 590px){  
            
        }

    </style>


    @endsection
{{-- ESTILOS CSS PERSONALIZADOS --}}

{{-- CONTENIDO DE LA PAGINA --}}
    @section('content')
<div class="col-12 d-flex flex-column justify-content-center align-items-center" style="background-color: #353352">
    <div class="col-7 d-flex flex-wrap justify-content-center" style="height: auto; background-color:;">
        <div class="col-12 titulo-nosotros">¡15 años de experiencia respaldan tu compra!</div>
        <div class="col-10 texto-nosotros" style="height: auto; background-color:">Todos nuestros asesores comenzarón su aventura en el departamento de rentas de brincolines bambinos</div>
        <div class="col-12 d-flex justify-content-center align-items-center" style="height: 7rem; background-color: ; margin-top: 3rem;">
        <img src="{{asset('img/design/Asesores/Bambinos-logo.png')}}" alt="" style="height: 100%; width: auto;">
    </div>
    <div class="col-10 subtexto-nosotros">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil aut dignissimos eius consequuntur sapiente et repellendus architecto soluta! Expedita laboriosam error, cum ullam sapiente consequuntur, quo quaerat illum aperiam magnam ex voluptate. Cupiditate veniam dicta rem ipsa provident ipsum? Maxime nostrum soluta impedit perspiciatis quas sequi nulla consequatur quasi doloremque.</div>
    </div>

    {{-- -------------------------------------------- Recuadro sobre socios -------------------------------------------- --}}
    <div class="col-6 d-flex flex-row" style="height: 30rem; margin: 3rem 0rem 10rem 0rem">
        <div class="col-3 d-flex flex-column justify-content-center align-items-center" style="height: 100%; background-color: #e04526">
            <div class="col-6 d-flex align-items-end justify-content-center" style="height: 7rem; background-color: #ffffff; border-radius: 100px; position: relative; margin-top: 3rem;">
                <img style="position: absolute; height: 10rem; width: auto; border-bottom-left-radius: 100px; border-bottom-right-radius: 100px" src="{{asset('img/design/Inicio/Ale.png')}}" alt="">
            </div>
            <div class="col-10 d-flex justify-content-center align-items-center nombre-socio">
                Alejandra Sánchez.
            </div>
            <div class="col-10 d-flex flex-row align-items-end justify-content-center">
                <div class="col-7 conoceme">
                    Conoceme
                </div>
                <div class="col-5 linea-conoceme"></div>
            </div>
        </div>
        <div class="col-3 d-flex flex-column justify-content-between align-items-center" style="height: 100%; background-color: #E37A30">
            <div class="col-10 desc-socio" style="margin-top:3rem">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat beatae architecto tempore culpa similique perspiciatis expedita possimus repellat suscipit? Harum eaque qui excepturi accusamus sit obcaecati nostrum omnis, illum aliquid.
            </div>
            <div class="col-10 d-flex justify-content-end align-items-center" style="height: 1.5rem; background-color:; margin-bottom: 2rem;">
                <img src="{{asset('img/design/Inicio/whats.png')}}" style="height: 100%; margin-left: 0.5rem;" alt="">
                <img src="{{asset('img/design/Inicio/insta.png')}}" style="height: 100%; margin-left: 0.5rem;" alt="">
                <img src="{{asset('img/design/Inicio/face.png')}}" style="height: 100%; margin-left: 0.5rem;" alt="">
            </div>
        </div>
        <div class="col-3 d-flex flex-column justify-content-center align-items-center" style="height: 100%; background-color: #69319F">
            <div class="col-6 d-flex align-items-end justify-content-center" style="height: 7rem; background-color: #ffffff; border-radius: 100px; position: relative; margin-top: 3rem;">
                <img style="position: absolute; height: 10rem; width: auto; border-bottom-left-radius: 100px; border-bottom-right-radius: 100px" src="{{asset('img/design/Inicio/Jorge.png')}}" alt="">
            </div>
            <div class="col-10 d-flex justify-content-center align-items-center nombre-socio">
                Jorge Navarro.
            </div>
            <div class="col-10 d-flex flex-row align-items-end justify-content-center">
                <div class="col-7 conoceme">
                    Conoceme
                </div>
                <div class="col-5 linea-conoceme"></div>
            </div>
        </div>
        <div class="col-3 d-flex flex-column justify-content-between align-items-center" style="height: 100%; background-color: #4BA363">
            <div class="col-10 desc-socio" style="margin-top:3rem">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat beatae architecto tempore culpa similique perspiciatis expedita possimus repellat suscipit? Harum eaque qui excepturi accusamus sit obcaecati nostrum omnis, illum aliquid.
            </div>
            <div class="col-10 d-flex justify-content-end align-items-center" style="height: 1.5rem; background-color:; margin-bottom: 2rem;">
                <img src="{{asset('img/design/Inicio/whats.png')}}" style="height: 100%; margin-left: 0.5rem;" alt="">
                <img src="{{asset('img/design/Inicio/insta.png')}}" style="height: 100%; margin-left: 0.5rem;" alt="">
                <img src="{{asset('img/design/Inicio/face.png')}}" style="height: 100%; margin-left: 0.5rem;" alt="">
            </div>
        </div>
    </div>
</div>

{{-- -------------------------------------------- Ccarrousel -------------------------------------------- --}}

<div class="col-12 d-flex flex-column " style="height: auto; background-color: #ffffff">
    <div class="col-12 d-flex flex-row justify-content-end align-items-center">
        <div class="col-2" style="height: 1.2rem; background-color: #E04525;"></div>
        <div class="col-2" style="height: 1.2rem; background-color: #E37A30;"></div>
        <div class="col-2" style="height: 1.2rem; background-color: #69319F;"></div>
        <div class="col-2" style="height: 1.2rem; background-color: #4BA363;"></div>
    </div>

    <div class="col-12 d-flex flex-column justify-content-center align-items-center" style="margin-bottom: 5rem;">
        <div class="col-9 carrusel-nosotros" style="height: 40rem; background-color: ; margin-top: 5rem">
            @for ($i = 0; $i < 5; $i++)
            <div class="col-3 px-1" style="">
            <div class="col-12" style="height: 100%; background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url({{asset('img/design/Inicio/imagen02.png')}})"></div>
        </div>
            @endfor
        </div>
        <div class="col-2 slick-arrows d-flex flex-row justify-content-center align-items-center" style="background-color: #353352; height: auto;">
            <img src="{{asset('img/design/Inicio/flecha02.png')}}" class="slick-prev" style="transform: scaleX(1);" alt="Flecha Izquierda">
            <img src="{{asset('img/design/Inicio/flecha02.png')}}" class="slick-next" style="transform: scaleX(-1);" alt="Flecha Derecha">
          </div>
    </div>
    <div class="col-12 d-flex flex-column justify-content-center align-items-center">
        <div class="col-8 d-flex flex-column" style="margin-top: 2rem">
            <div class="col-12 d-flex justify-content-center align-items-center titulo-cal">Todos nuestros asesores comenzarón su aventura en el departamento de rentas de brincolines bambinos</div>
            <div class="col-12 d-flex justify-content-center align-items-center desc-cal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem voluptates unde et corporis! Numquam accusantium sequi fuga sapiente commodi nobis consequuntur eligendi vero minima reprehenderit eum ducimus molestiae dolore quisquam ut, eveniet quo pariatur distinctio cupiditate nam libero nulla? Ea rerum sequi animi magni dolor qui harum quis quibusdam repudiandae?</div>
        </div>

    </div>
    


    <div class="col-12 d-flex flex-row justify-content-start align-items-center">
        <div class="col-2" style="height: 1.2rem; background-color: #E04525;"></div>
        <div class="col-2" style="height: 1.2rem; background-color: #E37A30;"></div>
        <div class="col-2" style="height: 1.2rem; background-color: #69319F;"></div>
        <div class="col-2" style="height: 1.2rem; background-color: #4BA363;"></div>
    </div>
</div>
    @endsection
{{-- CONTENIDO DE LA PAGINA --}}

{{-- JAVASCRIPT EXTRAS --}}
    @section('jqueryExtra')
<script>
            $(document).ready(function() {
             $('.carrusel-nosotros').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 2,
                dots: false,
                arrows: false,
            });

            $('.slick-prev').click(function() {
                $('.carrusel-nosotros').slick('slickPrev');
            });

            $('.slick-next').click(function() {
                $('.carrusel-nosotros').slick('slickNext');
            });
});
</script>


    @endsection
{{-- JAVASCRIPT EXTRAS --}}
