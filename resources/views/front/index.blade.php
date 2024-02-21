@extends('layouts.front')

@section('title', 'Inicio')
{{-- CABECERAS DE ESTILOS --}}
    @section('cssExtras')


    @endsection
{{-- CABECERAS DE ESTILOS --}}

{{-- ESTILOS CSS PERSONALIZADOS --}}
    @section('styleExtras')
    <style>
        .titulo-landing{
            font-size: 4rem;
            font-family: tommy4;
            color: #ffffff;
            line-height: 4rem;
            padding-right: 1rem;
        }

        .descripcion-landing{
            margin-top: 1rem;
            color:#ffffff;
            padding-right: 2rem;
            font-size: 1.1rem;
            font-family: tommy3;
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
            top: 7rem;
            border-top-right-radius: 16px;
            border-bottom-right-radius: 16px;

        }

        .texto-menu{
            color: #ffffff;
            font-family: tommy3;
            font-weight: bold;
        }

        .boton-agendar{
            margin-top: 4rem;
            height: 3rem;
            border-radius: 23px;
            background-color: transparent;
            border: 2px solid #e37b30;
            color: #ffffff;
            font-weight: bolder;
        }

        .todo-emprender{
            color: #353352;
            font-size: 3rem;
            font-family: gotan4;
            line-height: 3rem;
        }

        .tarjeta-pasos{
            margin-top: 1rem;
            font-size: 1.1rem;
            font-family: tommy3;
        }

        .icono-div{
            height: 3.5rem;
            width: 3.5rem;
            padding: 6px 6px 6px 6px;
            background-color: #ffffff;
            border-radius: 50px;
        }

        .titulo-tarjeta{
            margin-top: 1rem;
            color: #ffffff;
            font-weight: bold;
            font-family: tommy3;
            font-size: 1.3rem;
        }

        .texto-tarjeta{
            color: #ffffff;
            font-family: tommy2;
            font-size: 1rem;
            margin-top: 1rem;
        }

        .boton-catalogos{
            margin-left: 3rem;
            height: 3rem;
            width: 15rem;
            color: #ffffff;
            border: none;
            background-color:  #353352;
            border-radius: 23px;
            font-family: tommy3;
            letter-spacing: 0.2rem;
        }

        .sharp{
            height: 100%;
            width: 100%; 
            background-size: contain; 
            background-repeat: no-repeat; 
            background-image: url({{asset('img/design/Inicio/Shape.png')}});

        }

        .zona-caliente{
            color: #ffffff;
            font-size: 6rem;
            line-height: 6rem;
            font-family: tommy4;
        }

        .boton-tienda{
            margin-top: 2rem;
            height: 3rem;
            width: 12rem;
            border-radius: 23px;
            border: none;
            background-color: #E37A30;
            color: #ffffff;
        }

        .carta-zona{
            height: 100%; 
            background-color: #ffffff; 
            border-radius: 33px; 
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin: 1rem; 
        }

        .kids-play{
            text-align: center;
            font-family: tommy5;
            font-size: 1.5rem;
            color: #353352;
            letter-spacing: 0.2rem;
        }

        .stock{
            text-align: center;
            font-family: tommy3;
            font-size: 1.5rem;
            color: #4ba361;
            letter-spacing: 0.2rem;
        }

        .linea-carta{
            height: 0.6rem;
            background-color: #E04526;
            border-radius: 23px;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .precio-zona{
            text-align: center;
            font-family: tommy4;
            font-size: 1.5rem;
            color: #4ba361;
            letter-spacing: 0.2rem;
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
            margin: 0rem 3rem 0rem 3rem;
        }

        .compra-segura{
            color: #ffffff;
            font-size: 2.5rem;
            font-family: gotan4;
            text-align: center;
            line-height: 2.5rem;
        }

        .MSI{
            font-family: tommy4;
            font-size: 1rem;
            color: #353352;
            letter-spacing: 0.1rem;
        }

        .clientes-titulo{
            margin-top: 7rem;
            height: 10rem;
            color: #ffffff;
            font-family: gotan4;
            font-size: 3rem;
            text-align: center;
        }

        .clientes-texto{
            margin-top: 3rem;
            color: #ffffff;
            font-family: tommy3;
            font-size: 1.2rem;
            text-align: center;
        }

        .expe-desc{
            font-family: tommy2;
            font-size: 1.2rem;
            color: #000000;
            line-height: 1.2rem;
            text-align: center;
            margin-bottom: 3rem;
        }

        .expe-nom{
            margin-top: 3rem;
            font-family: gotan4;
            color: #6a319F;
            font-size: 1.2rem;
        }

        .expe-linea{
            height: 0.3rem;
            border-radius: 23px;
            background-color: #6a319F;
        }

        .venta-segura-titulo{
            color: #353352;
            font-family: gotan4;
            font-size: 3rem;
            line-height: 3rem;
        }

        .venta-segura-desc{
            margin-top: 1rem;
            font-family: tommy2;
            font-size: 1rem;
            color: #353352;
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
            font-size: 1rem;
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

<div class="col-12 d-flex flex-wrap justify-content-center align-items-center" style="position: relative;">

   {{-- -------------------------------------------- Primera parte -------------------------------------------- --}}
    <div class="col-12 d-flex justify-content-center align-items-center" style="height: 50rem; background-color: #353352">
        <div class="col-9 d-flex flex-wrap justify-content-center" style="">
            <div class="col-6 d-flex flex-column justify-content-center" style="">
                <div class="col-12 titulo-landing" style="">¡Dejar de hablar para empezar a HACER!
                </div>
                <div class="col-12 descripcion-landing">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa soluta incidunt odio repellendus voluptatum eaque, mollitia molestias hic est blanditiis error temporibus sunt exercitationem molestiae optio cupiditate nobis tempore autem!
                </div>
                <button class="col-4 boton-agendar">AGENDAR</button>
            </div>

            <div class="col-6 carrousel" style="background-color:; height: 50rem;">
                <div style="height: 100%; width: 100%; background-size: cover;background-image: url({{asset('img/design/Inicio/slider.png')}});"></div>
                <div style="height: 100%; width: 100%; background-size: cover;background-image: url({{asset('img/design/Inicio/slider.png')}});"></div>
            </div>

        </div>
    </div>

    {{-- -------------------------------------------- Todo para emprender -------------------------------------------- --}}
    <div class="col-12 d-flex flex-wrap justify-content-end align-items-center">
        <div class="col-11 d-flex flex-wrap justify-content-end" style="height: 20rem;">
            
            <div class="col-3 d-flex flex-column justify-content-center" style="padding-left: 5rem;">
                <div class="todo-emprender">¡Todo para emprender!</div>
                <div class="tarjeta-pasos">¿Ya estas decidido a saltar? <br> Considera los 5 siguientes puntos</div>
            </div>
            
            <div class="col-9 multiple-items">
            <div class="col-2 ps-5 d-flex flex-column justify-content-center"  style="background-color: #E04526;">
                <div class="icono-div d-flex justify-content-center align-items-center">
                    <img src="{{asset('img/design/Inicio/icono01.png')}}" style="height: 100%;" alt="">
                </div>
                <div class="titulo-tarjeta">Motivación</div>
                <div class="col-2" style="height: 3px; border-radius: 23px; background-color: #ffffff"></div>
                <div class="texto-tarjeta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi blanditiis quas atque? Quos, culpa vitae?</div>
            </div>
            <div class="col-2 ps-5 d-flex flex-column justify-content-center"  style="background-color: #e37a30;">
                <div class="icono-div d-flex justify-content-center align-items-center">
                    <img src="{{asset('img/design/Inicio/icono02.png')}}" style="height: 100%;" alt="">
                </div>
                <div class="titulo-tarjeta">Asesoría</div>
                <div class="col-2" style="height: 3px; border-radius: 23px; background-color: #ffffff"></div>
                <div class="texto-tarjeta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi blanditiis quas atque? Quos, culpa vitae?</div>
            </div>
            <div class="col-2 ps-5 d-flex flex-column justify-content-center"  style="background-color: #69319F;">
                <div class="icono-div d-flex justify-content-center align-items-center">
                    <img src="{{asset('img/design/Inicio/icono03.png')}}" style="height: 100%;" alt="">
                </div>
                <div class="titulo-tarjeta">Catálogo</div>
                <div class="col-2" style="height: 3px; border-radius: 23px; background-color: #ffffff"></div>
                <div class="texto-tarjeta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi blanditiis quas atque? Quos, culpa vitae?</div>
            </div>
            <div class="col-2 ps-5 d-flex flex-column justify-content-center"  style="background-color: #4BA363;">
                <div class="icono-div d-flex justify-content-center align-items-center">
                    <img src="{{asset('img/design/Inicio/icono04.png')}}" style="height: 100%;" alt="">
                </div>
                <div class="titulo-tarjeta">Presupuesto</div>
                <div class="col-2" style="height: 3px; border-radius: 23px; background-color: #ffffff"></div>
                <div class="texto-tarjeta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi blanditiis quas atque? Quos, culpa vitae?</div>
            </div>
            <div class="col-2 ps-5 d-flex flex-column justify-content-center"  style="background-color: #E04526;">
                <div class="icono-div d-flex justify-content-center align-items-center">
                    <img src="{{asset('img/design/Inicio/icono05.png')}}" style="height: 100%;" alt="">
                </div>
                <div class="titulo-tarjeta">Experiencia</div>
                <div class="col-2" style="height: 3px; border-radius: 23px; background-color: #ffffff"></div>
                <div class="texto-tarjeta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi blanditiis quas atque? Quos, culpa vitae?</div>
            </div>
            <div class="col-2 ps-5 d-flex flex-column justify-content-center"  style="background-color: #E04526;">
                <div class="icono-div d-flex justify-content-center align-items-center">
                    <img src="{{asset('img/design/Inicio/icono01.png')}}" style="height: 100%;" alt="">
                </div>
                <div class="titulo-tarjeta">Motivación</div>
                <div class="col-2" style="height: 3px; border-radius: 23px; background-color: #ffffff"></div>
                <div class="texto-tarjeta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi blanditiis quas atque? Quos, culpa vitae?</div>
            </div>
        </div>
        </div>
    </div>
    {{-- -------------------------------------------- Catalogo exclusivo -------------------------------------------- --}}

    <div class="col-12 d-flex flex-row align-items-center justify-content-center" style="height: 10rem; background-color:;">
        <div class="todo-emprender">Nuestros catálogos</div>
        <button class="boton-catalogos">EXCLUSIVOS <img src="{{asset('img/design/Inicio/descargar.png')}}" style="height: 50%;" alt=""></button>
        <button class="boton-catalogos">ANIMADOS <img src="{{asset('img/design/Inicio/descargar.png')}}" style="height: 50%;" alt=""></button>
    </div>

    {{-- -------------------------------------------- Catalogo exclusivo -------------------------------------------- --}}

    <div class="col-12 d-flex justify-content-center align-items-center">
        <div class="col-9 d-flex flex-row" style="height: 40rem;">
            <div class="col-6 px-1">
                <div class="" style="height: 95.3%; width: 100%; background-size: cover; background-image: url({{asset('img/design/Inicio/imagen01.png')}})"></div>
            </div>
            <div class="col-6 carrucel-catalogo">
                <div class="col-6 mx-1" style="height: 100%; background-size: cover; background-image: url({{asset('img/design/Inicio/imagen01.png')}})"></div>
                <div class="col-6 mx-1" style="height: 100%; background-size: cover; background-image: url({{asset('img/design/Inicio/imagen01.png')}})"></div>
                <div class="col-6 mx-1" style="height: 100%; background-size: cover; background-image: url({{asset('img/design/Inicio/imagen01.png')}})"></div>
            </div>
        </div> 
    </div>

{{-- -------------------------------------------- Zona caliente-------------------------------------------- --}}

<div class="col-12 d-flex flex-wrap justify-content-center align-items-center" style="height: 35rem; margin-top: 15rem; background-color: #353352; position: relative;">

<div class="col-9 d-flex flex-wrap justify-content-center align-items-center" style="background-color: ; position: absolute; height: 30rem; top: -9rem">
    <div class="col-5" style="height: 100%;">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center sharp" style="">
            <div class="zona-caliente">¡Zona <br> Caliente!</div>
            <button class="boton-tienda">TIENDA EN LINEA</button>
        </div>
    </div>
    <div class="col-7 carrusel-zona">
        <div class="col-6 carta-zona d-flex flex-column justify-content-center align-items-center" style="">
            <div class="col-12" style="height: 60%; border-radius: 33px; background-repeat: no-repeat; background-size: contain; background-image: url({{'img/design/Inicio/brincolines.png'}})"></div>
            <div class="col-12 kids-play">KIDS PLAY</div>
            <div class="col-12 stock">EN STOCK</div>
            <div class="col-3 linea-carta"></div>
            <div class="col-12 precio-zona">$25,5000MX</div>
        </div>
        <div class="col-6 carta-zona d-flex flex-column justify-content-center align-items-center" style="">
            <div class="col-12" style="height: 60%; border-radius: 33px; background-repeat: no-repeat; background-size: contain; background-image: url({{'img/design/Inicio/brincolines.png'}})"></div>
            <div class="col-12 kids-play">KIDS PLAY</div>
            <div class="col-12 stock">EN STOCK</div>
            <div class="col-3 linea-carta"></div>
            <div class="col-12 precio-zona">$25,5000MX</div>
        </div>
        <div class="col-6 carta-zona d-flex flex-column justify-content-center align-items-center" style="">
            <div class="col-12" style="height: 60%; border-radius: 33px; background-repeat: no-repeat; background-size: contain; background-image: url({{'img/design/Inicio/brincolines.png'}})"></div>
            <div class="col-12 kids-play">KIDS PLAY</div>
            <div class="col-12 stock">EN STOCK</div>
            <div class="col-3 linea-carta"></div>
            <div class="col-12 precio-zona">$25,5000MX</div>
        </div>
    </div>
<div class="col-12 d-flex flex-row justify-content-center align-items-center">
    <div class="col-5"></div>
    <div class="col-2 slick-arrows d-flex flex-row justify-content-center align-items-center">
        <img src="{{asset('img/design/Inicio/flecha.png')}}" class="slick-prev" style="transform: scaleX(-1);" alt="Flecha Izquierda">
        <img src="{{asset('img/design/Inicio/flecha.png')}}" class="slick-next" style="transform: scaleX(1);" alt="Flecha Derecha">
      </div>
</div>
</div>
</div>

{{-- -------------------------------------------- footer targetas-------------------------------------------- --}}
<div class="col-12 d-flex flex-wrap justify-content-center align-items-center" style="height: 10rem; background-color: #353352;">
    <div class="col-9 d-flex flex-wrap justify-content-center align-items-center" style="height: 4rem;">
        <div class="col-3 border-end border-3 border-white d-flex justify-content-center align-items-center" style="height: 100%;">
            <div class="col-10">
                <img src="{{asset('img/design/Inicio/logo.png')}}" class="img-fluid d-block mx-auto" alt="Logo">
            </div>
        </div>
        <div class="col-3 border-end border-3 border-white d-flex justify-content-center align-items-center compra-segura px-5" style="height: 100%;">
            Compra Segura.
        </div>
        <div class="col-6 px-3">
            <div class="col-12 d-flex flex-row justify-content-center align-items-center" style="border-radius: 23px; background-color: #ffffff; height: 100%;">

                <div class="col-3 d-flex justify-content-center align-items-center" style="height: 100%; position: relative;">
                        <img src="{{asset('img/design/Inicio/clip.png')}}" class="" alt="Logo" style="position: absolute; height: 160%;">
                </div>

                <div class="col-4 d-flex justify-content-center align-items-center" style="height: 100%">
                    <img src="{{asset('img/design/Inicio/tarjetas.png')}}" class="col-11" alt="Logo" style="height: ">
                </div>
                <div class="col-5 d-flex justify-content-center align-items-center MSI">Meses sin intereses</div>
            </div>
        </div>
    </div>
</div>

{{-- -------------------------------------------- CLientes felices -------------------------------------------- --}}

<div class="col-12 d-flex flex-column justify-content-center align-items-center" style="background-color: #353352;">
    <div class="col-5 d-flex justify-content-center align-items-center clientes-titulo" style="">Clientes felices al compartir su experiencia</div>

    <div class="col-6 d-flex justify-content-center align-items-center clientes-texto">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae cum nostrum culpa distinctio? Vel ad omnis aliquid animi libero tempora nesciunt, dolorum aspernatur earum quas, quibusdam commodi, perferendis deleniti delectus?
    </div>

<div class="col-9 d-flex justify-content-center align-items-center" style="height: 23rem; background-color: ; margin-top: 3rem; margin-bottom: 15rem;">
    @php
        $experiencias = 0;
    @endphp
    @while ($experiencias <= 3)
    <div class="col-3 px-3" style="">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center" style="height: 100%; border-radius: 23px; background-color: #ffffff;">
            <div class="col-10 expe-desc">Empece mi negocio con un brincolin y ahora tengo 30. Gracias bambinos la fabrica</div>
            <div class="col-9 d-flex justify-content-center align-items-center" style="height: 2rem; background-color:;">
                <img src="{{asset('img/design/Inicio/estrella.png')}}" class="mx-1" alt="" style="height: 100%">
                <img src="{{asset('img/design/Inicio/estrella.png')}}" class="mx-1" alt="" style="height: 100%">
                <img src="{{asset('img/design/Inicio/estrella.png')}}" class="mx-1" alt="" style="height: 100%">
                <img src="{{asset('img/design/Inicio/estrella.png')}}" class="mx-1" alt="" style="height: 100%">
                <img src="{{asset('img/design/Inicio/estrella.png')}}" class="mx-1" alt="" style="height: 100%">
            </div>
            <div class="col-10 expe-nom">Brincolines Risas</div>
            <div class="col-10">
                <div class="col-2 expe-linea"></div>
            </div>
        </div>
    </div>
    @php
        $experiencias ++
    @endphp
    @endwhile
</div>
</div>


{{-- -------------------------------------------- Venta Segura (Socios) -------------------------------------------- --}}
<div class="col-12 d-flex flex-row justify-content-center align-items-start" style="height: 30rem;">
<div class="col-3 d-flex flex-column justify-content-center align-items-start" style="height: 100%; background-color:">
    <div class="col-6 venta-segura-titulo">
        Venta Segura.
    </div>
    <div class="col-10 venta-segura-desc">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa velit fugiat quas libero itaque, inventore tenetur obcaecati. Inventore, sit architecto sunt voluptates magnam ullam dicta, fugiat et cum commodi rerum?
    </div>
</div>
<div class="col-6 d-flex flex-row" style="height: 90%;">
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



    {{-- -------------------------------------------- Menu fixed -------------------------------------------- --}}
    <div class="vertical-text d-flex justify-content-center align-items-center" style="">
    <p class="texto-menu">catálogo online</p>
    </div>

</div>  


    @endsection
{{-- CONTENIDO DE LA PAGINA --}}

{{-- JAVASCRIPT EXTRAS --}}
    @section('jqueryExtra')
<script>
		$('.multiple-items').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 3
        });

		$('.carrousel').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false
        });

		$('.carrucel-catalogo').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: true,
            arrows: false
        });
        
        $(document).ready(function() {
             $('.carrusel-zona').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: false,
                arrows: false,
            });

            $('.slick-prev').click(function() {
                $('.carrusel-zona').slick('slickPrev');
            });

            $('.slick-next').click(function() {
                $('.carrusel-zona').slick('slickNext');
            });
});

        

</script>


    @endsection
{{-- JAVASCRIPT EXTRAS --}}
