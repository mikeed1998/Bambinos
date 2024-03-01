@extends('layouts.front')

@section('title', 'Inicio')
{{-- CABECERAS DE ESTILOS --}}
    @section('cssExtras')


    @endsection
{{-- CABECERAS DE ESTILOS --}}

{{-- ESTILOS CSS PERSONALIZADOS --}}
    @section('styleExtras')
    <style>

        .catalogo{
            color: #ffffff;
            font-family: gotan4;
            font-size: 3rem;
            line-height: 3rem;
        }

        .secciones{
            color: #ffffff;
            font-family: gotan3;
            font-size: 1.3rem;
        }

        .promo{
            color: #ffffff;
            font-family: gotan4;
            font-size: 4rem;
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

        .titulo-cal{
            font-family: gotan4;
            color: #353352;
            font-size: 4rem;
            text-align: center;
        }

        .desc-cal{
            color: #353352;
            font-family: tommy2;
            font-size: 1rem;
            text-align: center;
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        .boton-cal{
            border: none;
            background-color: #6962b1;
            color: #ffffff;
            border-radius: 33px;
            height: 4rem;
            width: 20rem;
            font-family: gotan4;
            font-size: 1.3rem;
            text-align: center
        }

        .boton-cal::placeholder{
            color: #353352;
        }

        .boton-cal-2{
            border: none;
            background-color: #4BA363;
            color: #FFFFFF;
            border-radius: 33px;
            height: 4rem;
            width: 20rem;
            font-family: gotan4;
            font-size: 1.3rem;
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

        a {
        text-decoration: none;
        color: inherit;
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

<div class="col-12 d-flex flex-wrap justify-content-start align-items-start" style="position: relative;background-color: #353352 ">

       {{-- -------------------------------------------- Catalogo 2024 -------------------------------------------- --}}
    <div class="col-3 d-flex flex-column align-items-end" style="height: 50rem;">
        <div class="col-12 d-flex justify-content-end align-items-center" style="height: 15rem; position: relative;"> 
           <img class="" src="{{ asset('img/design/Catalogo/catalogo.png') }}" alt="" style="position: absolute; height: 100%; width: 100%">
            <div class="col-7" style="position: absolute;">
                <div class="col-12 catalogo">Catálogo 2024.</div>
            </div>
        </div>
        
        
        

    <div class="col-7" style="height: 3rem;">
        <div class="col-12 d-flex flex-column" style="margin-top: 3rem;">

@php
    $cate = 0;
@endphp

@while ($cate < 10)
    
<a href="" class="col-12 d-flex flex-row justify-content-center align-items-center mb-3" style="height: 2rem">
   
    <div class="col-2" style="height: 100%">
        <img src="{{asset('img/design/Catalogo/stock.png')}}" alt="" style="height: 100%">
    </div>
    <div class="col-8 secciones">En Stock</div>

</a>

@php
    $cate ++
@endphp
@endwhile

        </div>
    </div>
    </div>

       {{-- -------------------------------------------- Catalogo -------------------------------------------- --}}

    <div class="col-9 d-flex flex-column justify-content-center align-items-center" style="height: 100%; background-colorred; height: auto">
        <div class="col-11 d-flex flex-row" style="height: 8rem; padding-left: ">
            <div class="col-auto d-flex justify-content-center align-items-end promo" style="height: 100%">Promociones</div>
            <div class="col-auto d-flex justify-content-center align-items-start"><img src="{{asset('img/design/Catalogo/promo.png')}}" alt="" style="height: 50%"></div>
        </div>
        <div class="col-11 d-flex flex-wrap" style="height: ; background-color: ">

@php
    $prod = 0;
@endphp

@while ($prod < 9)

<div class="col-4 px-3 my-2" style="height: 30rem;">
    <a href="{{route('front.brincolin')}}" class="col-12 d-flex flex-column align-items-center justify-content-center" style="height: 100%; background-color: #ffffff; border-radius: 33px">
        <div class="col-12" style="height: 60%; border-radius: 33px; background-repeat: no-repeat; background-size: contain; background-image: url({{'img/design/Inicio/brincolines.png'}})"></div>
        <div class="col-12 kids-play">KIDS PLAY</div>
        <div class="col-12 stock">EN STOCK</div>
        <div class="col-3 linea-carta"></div>
        <div class="col-12 precio-zona">$25,5000MX</div>
    </a>
</div>
@php
    $prod ++;
@endphp
@endwhile

        </div>
    </div>

    <div class="col-12 d-flex flex-column " style="height: auto; background-color: #ffffff">
        <div class="col-12 d-flex flex-row justify-content-end align-items-center">
            <div class="col-2" style="height: 1.2rem; background-color: #E04525;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #E37A30;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #69319F;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #4BA363;"></div>
        </div>
        
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
            <div class="col-8 d-flex flex-column" style="margin-top: 8rem">
                <div class="col-12 d-flex justify-content-center align-items-center titulo-cal">¿Quieres saber el tiempo en que recuperas tu inversion?</div>
                <div class="col-12 d-flex justify-content-center align-items-center desc-cal">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga accusantium deserunt harum blanditiis maiores, illum ad recusandae minima ut aut nostrum velit molestias quibusdam voluptates, natus consequuntur, incidunt consequatur sequi.</div>
            </div>
            <div class="col-12 d-flex flex-row justify-content-center align-items-center" style="margin-bottom: 5rem">
                
                <input type="text" class="mx-3 boton-cal" placeholder="KIDS PLAY">
                <input type="text" class="mx-3 boton-cal" placeholder="COSTO DE RENTA">
                <input type="text" class="mx-3 boton-cal" placeholder="WHATSAPP">
                <button class="mx-3 boton-cal-2">CALCULAR</button>
            </div>
        </div>

        <div class="col-12 d-flex flex-row justify-content-start align-items-center">
            <div class="col-2" style="height: 1.2rem; background-color: #E04525;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #E37A30;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #69319F;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #4BA363;"></div>
        </div>
    </div>
</div>  

{{-- -------------------------------------------- footer targetas-------------------------------------------- --}}
<div class="col-12 d-flex flex-wrap justify-content-center align-items-center" style="height: 25rem; background-color: #353352; padding-bottom: 10%">  

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

{{-- -------------------------------------------- Venta Segura (Socios) -------------------------------------------- --}}
<div class="col-12 d-flex flex-row justify-content-center align-items-start" style="height: 25rem; position: relative;">
    <div class="col-3 d-flex flex-column justify-content-start align-items-start" style="height: 100%; background-color:; margin-top: 3rem">
        <div class="col-6 venta-segura-titulo">
            Venta Segura.
        </div>
        <div class="col-10 venta-segura-desc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa velit fugiat quas libero itaque, inventore tenetur obcaecati. Inventore, sit architecto sunt voluptates magnam ullam dicta, fugiat et cum commodi rerum?
        </div>
    </div>
<div class="col-6 d-flex flex-row">
        <div class="col-6 d-flex flex-row" style="height: 25rem; position: absolute; top: -20%">
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
    </div>


    @endsection
{{-- CONTENIDO DE LA PAGINA --}}

{{-- JAVASCRIPT EXTRAS --}}
    @section('jqueryExtra')
<script>
</script>


    @endsection
{{-- JAVASCRIPT EXTRAS --}}