@extends('layouts.front')

@section('title', 'Inicio')
{{-- CABECERAS DE ESTILOS --}}
    @section('cssExtras')


    @endsection
{{-- CABECERAS DE ESTILOS --}}

{{-- ESTILOS CSS PERSONALIZADOS --}}
    @section('styleExtras')
    <style>

    .button-uno {
    appearance: none;
    background-color: #C9C9C9;
    border: 0.125em solid #C9C9C9;
    border-radius: 36px;
    box-sizing: border-box;
    color: #ffffff;
    cursor: pointer;
    display: inline-block;
    font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-size: 16px;
    font-weight: 600;
    line-height: normal;
    margin: 0;
    height: 4rem;
    width: 10rem;
    outline: none;
    padding: 0;
    text-align: center;
    text-decoration: none;
    transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    will-change: transform;
    }

    .button-uno:disabled {
    pointer-events: none;
    }

    .button-uno:hover {
    color: #fff;
    background-color: #B2302D;
    border: 0.125em solid #B2302D;
    box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
    transform: translateY(-2px);
    }

    .button-uno:active {
    box-shadow: none;
    transform: translateY(0);
    }

    .button-dos {
    padding: 15px 45px;
    border-radius: 26px;
    color: #000000;
    z-index: 1;
    background: #ffffff;
    position: relative;
    font-size: 17px;
    border: solid;
    transition: all 250ms;
    overflow: hidden;
    }

    .button-dos::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 0;
    border-radius: 15px;
    background-color: #212121;
    z-index: -1;
    transition: all 250ms
    }

    .button-dos:hover {
    color: #e8e8e8;
    }

    .button-dos:hover::before {
    width: 100%;
    }

    .maint-txt{
       font-size: 1.2rem;
        text-align: justify;
    }

    .inp-form::placeholder{
        font-size: 17px;
        color: #000000;
    }

    .cartas{
        height: 100%; 
        border-radius: 13px; 
        cursor: pointer;
        transition: ease 0.2s;
        box-shadow: 0px 0px 2px #000000;
    }

    .cartas:hover{
        margin-bottom: 30px;
        box-shadow: 0px 0px 20px #000000;
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

<div class="col-12 d-flex flex-wrap justify-content-center" style="padding: 0px 80px 0px 80px">
<div class="col-12 d-flex justify-content-center" style="position: relative; background-color:; padding-top: 50px">
    <div class="col-12 d-flex flex-wrap" style="height: 550px; width: 80%; background-color:; ">
        <div class="col-6">
        <img style="height: 100%" src="{{asset('img/design/Sektor/home/guardia.png')}}" alt="">
        </div>
        <div class="col-6 d-flex align-items-center">
            <div class="col-12 d-flex flex-wrap align-items-center" style="height: 50%">
                <img style="height: 5rem" src="{{asset('img/design/Sektor/home/sektor_logo.png')}}" alt="">
                <div class="col-10 maint-txt">Somos un centro de desarrollo intearal funcional para
                    acompañar, estimular, impulsar y brindar herramientas a niños y niñas en todas las dimensiones del ser humano,
                    desde lo emocional, lo cognitivo, lo espiritual, Io conductual, lo social y lo familiar</div>
            </div>
        </div>
    </div>
    <div class="col-11 d-flex" style="position: absolute; height: 100px; background-color: rgba(177, 13, 10, 0.881); bottom: 0;">
        <div class="col-6 d-flex flex-wrap align-items-center" style="padding: 20px 0px 20px 60px">
            <div class="col-12" style="color: #ffffff; font-size: 1.3rem; font-weight: bold">Email Your  Resume To:</div>
            <div class="col-12" style="color: #ffffff; font-size: 1.2rem;">youremailhere@yourwebsite.com</div>
        </div>
        <div class="col-6 d-flex align-items-center justify-content-start">
            <div class="" style="color: #ffffff; font-size: 1.5rem; font-weight: bold">Apply now!</div>
        </div>
    </div>
</div>

<div class="col-5 d-flex justify-content-between" style="margin: 90px 0px 70px 0px;">
    @foreach ($categoria as $c)
    <button class="button-uno">{{$c->nombre}}</button>
    @endforeach
</div>


<div class="col-12 d-flex flex-wrap justify-content-center align-items-center" style="height: 500px; background-color:;">
    <div class="multiple-items col-12" style="">
        @foreach ($productos as $p)
        <div class="col-3 px-2 py-3">
    <a href="{{route('front.oferta',$p->id)}}">
            <div class="col-12 d-flex align-items-center card pt-3 px-3 cartas" style="">
                <div style="width: 100%; height: 19rem; background-repeat: no-repeat; background-size: cover; background-image: url({{asset('img/design/Sektor/home/imagen02.png')}})">
                {{-- <img src="{{asset('img/design/Sektor/home/imagen02.png')}}" alt=""> --}}
                </div>
                <div class="col-11 mt-2 px-4" style="text-align: center; font-size: 1.8rem">{{$p->nombre}}</div>
                <div class="col-4 border border-danger border-2 my-3" style="border-radius: 23px"></div>
                <div class="col-12" style="font-weight: bold; text-align: center; font-size: 1.5rem">{{$p->subnombre}}</div>
            </div>
        </a>
        </div>
    @endforeach
</div>
</div>

<div class="col-12 d-flex flex-wrap justify-content-center align-items-center" style="margin-top: 90px ">
    <div class="col-12" style="text-align: center; font-size: 3.5rem; font-weight: 100;">¿Como podemos ayudarte?</div>
    <div class="col-4" style="text-align: center; font-size: 1.2rem">seres humanos funcionales en todas las areas de su vida, a traves de herramientas a ellos.</div>
    <div class="col-12 d-flex justify-content-center align-items-center" style="margin-top: 50px;">
        <input class="inp-form" type="text" name="" id="" placeholder="Nombre" style="border:solid; border-radius: 23px; padding: 15px 60px 15px 60px">
        <input class="inp-form" type="text" name="" id="" placeholder="Whatsapp" style="border:solid; border-radius: 23px; padding: 15px 60px 15px 60px; margin: 0px 20px 0px 20px;">
        <input class="inp-form" type="text" name="" id="" placeholder="Mensaje" style="border:solid; border-radius: 23px; padding: 15px 60px 15px 60px">
    </div>
    <div class="col-12 d-flex justify-content-center align-items-center" style="margin: 50px 0px 50px 0px">
        <button class="button-dos">Enviar</button>
    </div>
</div>
</div>  


    @endsection
{{-- CONTENIDO DE LA PAGINA --}}

{{-- JAVASCRIPT EXTRAS --}}
    @section('jqueryExtra')
<script>
$('.multiple-items').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  dots: true,
});
		
</script>


    @endsection
{{-- JAVASCRIPT EXTRAS --}}
