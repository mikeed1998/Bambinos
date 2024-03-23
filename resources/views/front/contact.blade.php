@extends('layouts.app')

@section('title', 'Inicio')
{{-- CABECERAS DE ESTILOS --}}
    @section('cssExtras')
    @endsection

{{-- ESTILOS CSS PERSONALIZADOS --}}
    @section('styleExtras')
    <style>
        .titulo-contacto{
            color:#ffffff;
            font-family: gotan4;
            font-size: 4rem;
            text-align: center; 
        }

        .desc-contacto{
            margin-top: 2rem;
            color: #ffffff;
            font-size: 1.2rem;
            font-family: tommy2;
            text-align: center;
            text-wrap: balance;
        }

        .btn-contacto{
            margin-top: 3rem;
            background-color: #6962B1;
            color: #ffffff;
            height: 4rem;
            width: 18rem;
            border: none;
            border-radius: 33px;
            font-family: gotan4;
            font-size: 1.2rem;
            text-align: center
        }

        .btn-contacto::placeholder{
            font-family: gotan4;
            font-size: 1.2rem;
            color: #353352;
            text-align: center
        }

        .text-area{
            border-radius: 43px;
            padding: 1rem 2rem 0px 2rem;
            font-family: tommy2;
            font-size: 1.3rem;
        }

        .btn-enviar{
            background-color: #ABA363;
            color: #ffffff;
            height: 4rem;
            width: 18rem;
            border: none;
            border-radius: 33px;
            font-family: gotan4;
            font-size: 1.2rem;
            text-align: center
        }

        .img-cont{
            width: 3rem;
            aspect-ratio: 3/2;
            object-fit: contain;
        }

        .texto-fot-contact{
            text-align: end;
            color: #ffffff;
            font-size: 1.2rem;
            margin-top: 0.5rem;
        }
    </style>
    @endsection

{{-- CONTENIDO DE LA PAGINA --}}
    @section('content')
    <div class="col-12 d-flex justify-content-center align-items-center" style="height: auto; background-color: #353352; position: relative;">
        <div class="col-12 d-flex justify-content-center align-items-center" style="position: absolute; height: 60rem; background-repeat: no-repeat; background-size: contain; background-position: top; background-image: url({{asset('img/design/Contacto/background.png')}}); top: 0; z-index: 0">
        </div>
        <div class="col-12 d-flex flex-wrap justify-content-center" style="height: 100%; margin-top: 5rem; z-index: 1">
            <div class="col-6">
                <div class="col-12 titulo-contacto">¿Comó podemos ayudarte?</div>
                <div class="col-12 desc-contacto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, quidem. Porro, ea. Corrupti minima ducimus deserunt atque odio maxime, consequatur nemo qui deleniti nisi? Rem, blanditiis nisi minus tempora illum, at doloribus id laboriosam impedit minima quisquam, modi explicabo optio.</div>
                <div class="col-12 d-flex flex-row justify-content-between align-items-center">
                    <input type="text" class="btn-contacto" placeholder="Nombre">
                    <input type="text" class="btn-contacto" placeholder="Whatsapp">
                    <input type="text" class="btn-contacto" placeholder="Correo">
                </div>
                <div class="col-12" style="margin-top: 2rem;">
                    <textarea name="" id="" rows="7" class="col-12 text-area"></textarea>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center" style="margin-top: 2rem;">
                    <button class="btn-enviar">ENVIAR</button>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="col-8 d-flex flex-column justify-content-center " style="height: 20rem; background-color:transparent">
                <div class="col-12 d-flex justify-content-end align-items-start">
                    <img class="img-cont" src="{{asset('img/design/Inicio/whats.png')}}" alt="">
                    <img class="img-cont" src="{{asset('img/design/Inicio/insta.png')}}" alt="">
                    <img class="img-cont" src="{{asset('img/design/Inicio/face.png')}}" alt="">
                    <img class="img-cont" src="{{asset('img/design/Inicio/tiktok.png')}}" alt="">
                    <img class="img-cont" src="{{asset('img/design/Inicio/youtube.png')}}" alt="">
                </div>
                <div class="col-12 d-flex justify-content-end align-items-start" style="margin-top: 2rem;">
                    <div class="col-4">
                        <div class="col-12 texto-fot-contact">Bosque La Primavera 12 Col. Puerta del Bosque, Zapopan, Jalisco. CP. 45066</div>
                        <div class="col-12 texto-fot-contact">Teléfonos de contacto:</div>
                        <div class="col-12 texto-fot-contact">3336134420 / 3336580465</div>
                    </div>
                </div>
                
                </div>
            </div>
            <div class="col-12" style="height:; background-color: ;">
                <iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.1312541563802!2d-103.47670911362331!3d20.62350615240897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ab97ac38ed03%3A0x8c74cb94685d980c!2sBosque%20La%20Primavera%2012%2C%20El%20Fort%C3%ADn%2C%2045066%20Zapopan%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1710350123247!5m2!1ses-419!2smx" height="900" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    @endsection

{{-- JAVASCRIPT EXTRAS --}}
    @section('jqueryExtra')
    @endsection