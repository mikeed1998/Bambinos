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

        .titulo-brincolin{
            font-family: gotan4;
            color: #353352;
            font-size: 3rem;
            padding-left: 1rem;
        }

        .incluye-brincolin{
            font-family: gotan4;
            color:#000000;
        }

        .metros{
            font-family: gotan4;
            font-size: 3rem;
            color: #ffffff;
        }

        .pulgadas{
            font-family: gotan4;
            font-size: 2rem;
            color: #ffffff;
        }

        .medidas-pulgadas{
            color: #353352;
            font-size: 2rem;
            font-family: gotan3;
        }

        .texto-anticipo{
            color: #4BA363;
            font-family: gotan4;
            font-size: 3.5rem;
            text-align: center;
        }

        .linea-anticipo{
            background-color: #4ba361;
            height: 0.2rem;
        }

        .texto-compra{
            color: #FFFFFF;
            font-family: gotan3;
            font-size: 1.1rem;
        }

        .boton-comprar{
            height: 4rem;
            width: 20rem;
            border-radius: 33px;
            color: #FFFFFF;
            border: none;
            background-color: #4BA363;
            font-family: gotan3;
            font-size: 1.2rem;
            letter-spacing: 0.3rem
        }

        .carta-pasos{
            height: 25rem; 
            border-radius: 23px; 
            border: solid 2px #b9b9b9;
            background-color: #ffffff;
            margin-top: 8rem;
        }

        .circulo-pasos{
            height: 5rem;
            width: 5rem;
            background-color: #239F17;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-family: gotan4;
            font-size: 3rem;
        }

        .texto-pasos{
            color: #353352;
            padding: 5rem 3rem 0rem 3rem;
            font-family: gotan2;
            font-size: 1.2rem;
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

       {{-- -------------------------------------------- Detalle -------------------------------------------- --}}

    <div class="col-9 d-flex flex-column justify-content-center align-items-center" style="height: 100%; background-color:          ; height: auto">
        <div class="col-11 d-flex flex-column" style="height: 100%; padding-left: ">
            <div class="col-12 d-flex justify-content-start align-items-start"><img src="{{asset('img/design/Catalogo/promo.png')}}" alt="" style="height: 5rem"></div>
            <div class="col-12 d-flex justify-content-start align-items-end promo" style="height: 100%">Kids play</div>
            
        </div>
        <div class="col-11 d-flex flex-wrap" style="height: ; background-color: ">

            <div class="col-12 d-flex flex-row" style="; background-color: #ffffff; margin-bottom: 3rem; border-bottom-left-radius: 33px; ">
                <div class="col-9 d-flex flex-wrap justify-content-start" style="height: ; background-color: ">
                    <div class="col-12 d-flex " style="height: 40rem; background-size: cover; background-position: center ;background-repeat: no-repeat; background-image: url({{asset('img/design/Detalle/imagen01.png')}})"></div>
                    <div class="col-6 d-flex flex-column align-items-start justify-content-start" style="height: 18rem">
                        <div class="col-12 titulo-brincolin" style="background-color:">
                            Incluye:</div>
                            <div class="col-12 d-flex flex-column justify-content-center align-items-center" style="height: ; background-color: ;">
                            
                                @for ($incluye = 0; $incluye < 4; $incluye++)

                                    <div class="col-10 d-flex flex-wrap justify-content-start align-items-center my-1" style="height: 2rem; background-color: ">
                                        <div class="col-auto me-2" style="height: 100%">
                                            <img src="{{asset('img/design/Detalle/flecha.png')}}" alt="">
                                        </div>
                                        <div class="col-auto incluye-brincolin">1 Motor Soplador de 1HP</div>
                                    </div>

                                @endfor

                            </div>
                    </div>
                    <div class="col-6 d-flex flex-row">
                        <div class="col-4" style="height: 15rem; background-color: ">
                            <div class="col-12 d-flex flex-column align-items-start ps-2 pt-4" style="height: 10rem; background-color: #E04425">
                                <div class="col-auto metros">5m</div>
                                <div class="col-auto pulgadas">16'5'</div>
                            </div>
                            <div class="col-12 medidas-pulgadas">Frente</div>
                        </div>
                        <div class="col-4" style="height: 15rem; background-color: ">
                            <div class="col-12 d-flex flex-column align-items-start ps-2 pt-4" style="height: 10rem; background-color: #E37B30">
                                <div class="col-auto metros">5m</div>
                                <div class="col-auto pulgadas">16'5'</div>
                            </div>
                            <div class="col-12 medidas-pulgadas">Fondo</div>
                        </div>
                        <div class="col-4" style="height: 15rem; background-color: ">
                            <div class="col-12 d-flex flex-column align-items-start ps-2 pt-4" style="height: 10rem; background-color: #4BA363">
                                <div class="col-auto metros">5m</div>
                                <div class="col-auto pulgadas">16'5'</div>
                            </div>
                            <div class="col-12 medidas-pulgadas">Alto</div>
                        </div>
                    </div>
                </div>
                <div class="col-3" style="height: 100%; background-color:;">
                    @for ($detalle = 0; $detalle < 4; $detalle++)
                    @if ($detalle == 0)
                    <div class="col-12 ps-2 " style="height: 25%;">
                        <div class="col-12" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url({{asset('img/design/Detalle/imagen02.png')}})"></div>
                    </div>
                    @elseif ($detalle > 0 && $detalle<3)
                    <div class="col-12 ps-2 pt-2" style="height: 25%;">
                        <div class="col-12" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url({{asset('img/design/Detalle/imagen02.png')}})"></div>
                    </div>
                    @elseif ($detalle == 3)
                    <div class="col-12 ps-2 pt-2" style="height: 25%;">
                        <div class="col-12" style="height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: url({{asset('img/design/Detalle/imagen02.png')}})"></div>
                    </div>
                    @endif
                    @endfor
                </div>
            </div>
  
        </div> 

        {{-- -------------------------------------------- Genera tu orden -------------------------------------------- --}}
        <div class="col-11 d-flex flex-column justify-content-center align-items-center" style="height: 15rem; background-color:#ffffff; border-radius: 33px; margin-bottom: 3rem"> 
        <div class="col-11 texto-anticipo">Genera tu orden en línea con el 50%</div>
        <div class="col-11 linea-anticipo"></div>
        <div class="col-11 texto-anticipo">Precio: $29,100mx Anticipo: $14,550mx</div>
        </div>

{{-- -------------------------------------------- Genera tu compra y boton -------------------------------------------- --}}

        <div class="col-11 d-flex flex-row justify-content-center align-items-center" style="height: 6rem; background-color: ; margin-bottom: 6rem">
        <div class="col-6 ">
            <div class="d-flex justify-start-center align-items-center texto-compra">Genra tu compra</div>
            <div class="d-flex justify-start-center align-items-center texto-compra">Recibe de inmediato nuestra llamada</div>
            <div class="d-flex justify-start-center align-items-center texto-compra">Configurar tu compra</div>
        </div>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <button class="boton-comprar">COMPRAR</button>
        </div>
        </div>
    </div>

    




    {{-- -------------------------------------------- Ya realice mi pedido -------------------------------------------- --}}


    <div class="col-12 d-flex flex-column " style="height: auto; background-color: #f8f8f8">
        <div class="col-12 d-flex flex-row justify-content-end align-items-center">
            <div class="col-2" style="height: 1.2rem; background-color: #E04525;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #E37A30;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #69319F;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #4BA363;"></div>
        </div>
        
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
            <div class="col-8 d-flex flex-column" style="margin-top: 6rem">
                <div class="col-12 d-flex justify-content-center align-items-center titulo-cal">¡Ya realice mi pedido! <br> ¿Que sigue?</div>
            </div>

            <div class="col-10 d-flex flex-row justify-content-center align-items-center" style="height: auto; background-color: #f8f8f8;">


                <div class="col-3 px-3" style="height: 100%; background-color: ; margin-bottom: 6rem">
                    <div class="col-12 carta-pasos" style="position: relative;">
                        <div class="" style="position: absolute; top: -12%; left: 6%;">
                            <div class="circulo-pasos">1</div>
                        </div>
                        <div class="texto-pasos">¡Recibirás una llamada de tu agente para confirmar el pago, y personalizar el pedido! ¡Estamos listos para comenzar con la producción de tus brincolines!</div>
                    </div>
                </div>

                <div class="col-3 px-3" style="height: 100%; background-color: ; margin-bottom: 6rem">
                    <div class="col-12 carta-pasos" style="position: relative;">
                        <div class="" style="position: absolute; top: -12%; left: 6%;">
                            <div class="circulo-pasos">2</div>
                        </div>
                        <div class="texto-pasos">El tiempo de producción es de 6 a 8 semanas. Trabajando de lunes a vierdes sin contar días festivos.</div>
                    </div>
                </div>

                <div class="col-3 px-3" style="height: 100%; background-color: ; margin-bottom: 6rem">
                    <div class="col-12 carta-pasos" style="position: relative;">
                        <div class="" style="position: absolute; top: -12%; left: 6%;">
                            <div class="circulo-pasos">3</div>
                        </div>
                        <div class="texto-pasos">Una vez terminados tus brincolines, te enviaremos fotos de los juegos inflados para que confirmes que todo esta listo para liquidar tu pedido y programar envio.</div>
                    </div>
                </div>

                <div class="col-3 px-3" style="height: 100%; background-color: ; margin-bottom: 6rem">
                    <div class="col-12 carta-pasos" style="position: relative;">
                        <div class="" style="position: absolute; top: -12%; left: 6%;">
                            <div class="circulo-pasos">4</div>
                        </div>
                        <div class="texto-pasos">Generamos tu guía de embarque para que en las proximas 48 más tardar 72 horas tu pedido salga a paquetería o si prefieres puedes recoger en nuestras instalaciones.</div>
                    </div>
                </div>
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
<div class="col-12 d-flex flex-wrap justify-content-center align-items-center" style="height: 10rem; background-color: #353352; padding-bottom: ">  

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



    @endsection
{{-- CONTENIDO DE LA PAGINA --}}

{{-- JAVASCRIPT EXTRAS --}}
    @section('jqueryExtra')
<script>
</script>


    @endsection
{{-- JAVASCRIPT EXTRAS --}}