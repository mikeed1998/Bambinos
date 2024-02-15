
@extends('layouts.admin')
@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/dropify.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@endsection
@section('jsLibExtras')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
@section('styleExtras')
<style>

/* input con opacidad y sin boton de selecciond e archivo */
.file-upload input[type="file"] {
				position: absolute;
				left: -9999px;
				}

				.file-upload label {
				display: inline-block;
				background-color: #00000031;
				color: #fff;
				padding: 6px 12px;
				cursor: pointer;
				border-radius: 4px;
				font-weight: normal;
				opacity: 0%;
				}

				.file-upload input[type="file"] + label:before {
				content: "\f07b";
				font-family: "Font Awesome 5 Free";
				font-size: 16px;
				margin-right: 5px;
				transition: all 0.5s;
				}

				.file-upload input[type="file"] + label {
					transition: all 0.5s;
				}

							

				.file-upload input[type="file"]:focus + label,
				.file-upload input[type="file"] + label:hover {
				backdrop-filter: blur(5px);
				background-color: #41464a37;
				opacity: 100%;
				transition: all 0.5s;
				}

			/* input con opacidad y sin boton de selecciond e archivo */

/* input con opacidad y sin boton de selecciond e archivo */
					.file-upload input[type="file"] {
                    position: absolute;
                    left: -9999px;
                    }

                    .file-upload label {
                    display: inline-block;
                    background-color: #00000031;
                    color: #fff;
                    padding: 6px 12px;
                    cursor: pointer;
                    border-radius: 4px;
                    font-weight: normal;
                    opacity: 0%;
                    }

                    .file-upload input[type="file"] + label:before {
                    content: "\f07b";
                    font-family: "Font Awesome 5 Free";
                    font-size: 16px;
                    margin-right: 5px;
                    transition: all 0.5s;
                    }

                    .file-upload input[type="file"] + label {
                        transition: all 0.5s;
                    }

                    .file-upload input[type="file"]:focus + label,
                    .file-upload input[type="file"] + label:hover {
                    backdrop-filter: blur(5px);
                    background-color: #41464a37;
                    opacity: 100%;
                    transition: all 0.5s;
                    }
/* input con opacidad y sin boton de selecciond e archivo */

					.containersc::-webkit-scrollbar {
					width: 8px;     /* Tamaño del scroll en vertical */
					height: 8px;    /* Tamaño del scroll en horizontal */
					display: none;  /* Ocultar scroll */
					}
					/* Ponemos un color de fondo y redondeamos las esquinas del thumb */
					.containersc::-webkit-scrollbar-thumb {
						background: #ccc;
						border-radius: 4px;
					}

					/* Cambiamos el fondo y agregamos una sombra cuando esté en hover */
					.containersc::-webkit-scrollbar-thumb:hover {
						background: #b3b3b3;
						box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
					}

					/* Cambiamos el fondo cuando esté en active */
					.containersc::-webkit-scrollbar-thumb:active {
						background-color: #999999;
					}
					/* Ponemos un color de fondo y redondeamos las esquinas del track */
					.containersc::-webkit-scrollbar-track {
						background: #e1e1e1;
						border-radius: 4px;
					}

					/* Cambiamos el fondo cuando esté en active o hover */
					.containersc::-webkit-scrollbar-track:hover,
					.containersc::-webkit-scrollbar-track:active {
					background: #d4d4d4;
					}


</style>
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

</style>
@endsection
{{-- <div class="col-12 d-flex flex-wrap justify-content-center px-2 px-md-4 px-lg-4" style="background-color:">
    -----------------------------------------------------------
    <form id="form_slider" action="{{route('config.seccion.portadaseccion')}}" method="POST" class="col-6 mb-3 d-flex justify-content-center flex-column me-5" style="height: 120px;" enctype="multipart/form-data">
        @csrf
        <div class="col-12 text-center">
            <h5>Agregar imagen al carrusel</h5>
        </div>
        <input type="file" name="archivo" id="up_file_slider" class="dropify " style="border-radius:10px !important;" data-allowed-file-extensions="jpg png jpeg">
    </form> 
    ------------------------------------------------------------
    <div class="col-12 d-flex justify-content-center align-items-center" style="background: rgba(0, 0, 0, 0.311); z-index: 10;  position: absolute; top:0; bottom: 0; border-radius: 16px;">
        <p style="color: white; font-size: 2rem; font-weight: bold;">SECCION NO EDITABLE</p>
    </div>
    -----------------------------------------------
            <div class="col-12 mb-2 text-center mt-3"><i class="fa-solid fa-pencil" style="font-size: 1.5rem;"></i></div>
		 <textarea cols="" rows="6" class="col-12 d-flex align-items-center txt-txt pt-2 editar_text_seccion_global" style="border: none"  data-id="{{$elements[0]->id}}" data-url="{{route('config.seccion.textglobalseccion')}}" data-table="Elemento" data-campo="texto">{{$elements[0]->texto}}</textarea>
    ---------------------------------------------------
    				<div class="col-12 mb-2" style="height: 100px; position: relative;">
						<div  class="file-upload col-12 p-0 m-0" style=" top: 0; bottom: 0; background: ; height: 100%;" >
							@csrf
							<input id="input_img_element" class="m-0 p-0" type="file" name="archivo">
							<label id="label_form" class="col-12 m-0 p-0 d-flex justify-content-center align-items-center" for="input_img_element" style="opacity: 100%; height: 100%;  border-radius: 16px;">Seleccionar archivo</label>
						</div>
						<script>
							///////////////////// Editar campos imegn categoria ////////////////////
							$('#input_img_element').change(function(e) {
								$('#label_form').addClass('backr');
								$('#label_form').html('Imagen añadida');
							});
							///////////////////// Editar campos imegn categoria ////////////////////
						</script>
				</div>
    --}}
@section('content')
<div class="row mb-0 px-2" style="border-radius: 36px">
    <a href="{{ route('config.seccion.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i>Regresar</a>
</div>

<div class="col-12 d-flex flex-wrap justify-content-center" style="padding: 0px 80px 0px 80px;">
    <div class="col-12 d-flex justify-content-center" style="position: relative; background-color:; padding-top: 50px">
        <div class="col-12 d-flex flex-wrap" style="height: 550px; width: 100%; background-color:; ">
            <div class="col-6">
            <img style="height: 83%" src="{{asset('img/design/Sektor/home/guardia.png')}}" alt="">
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
        {{-- <div class="col-11 d-flex" style="position: absolute; height: 100px; background-color: rgba(177, 13, 10, 0.881); bottom: 0;">
            <div class="col-6 d-flex flex-wrap align-items-center" style="padding: 20px 0px 20px 60px">
                <div class="col-12" style="color: #ffffff; font-size: 1.3rem; font-weight: bold">Email Your  Resume To:</div>
                <div class="col-12" style="color: #ffffff; font-size: 1.2rem;">youremailhere@yourwebsite.com</div>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-start">
                <div class="" style="color: #ffffff; font-size: 1.5rem; font-weight: bold">Apply now!</div>
            </div>
        </div> --}}
    </div>
    
    <div class="col-5 d-flex justify-content-between" style="margin: 90px 0px 90px 0px; position: relative;">
        <button class="button-uno">Guardias de Seguridad</button>
        <button class="button-uno">Custodios</button>
        <button class="button-uno">Custodios</button>
        <div class="col-12 d-flex justify-content-center align-items-center" style="background: rgba(0, 0, 0, 0.311); z-index: 10;  position: absolute; top:0; bottom: 0; border-radius: 16px;">
            <p style="color: white; font-size: 2rem; font-weight: bold;">SECCION NO EDITABLE</p>
        </div>
    </div>
    
    @php
        $cartas = 0;
    @endphp
    <div class="col-12 d-flex justify-content-center align-items-center" style="height: 500px; background-color:; position: relative;">
            @while ($cartas <= 3)
            <div class="col-3 px-2">
  
                <div class="col-12 d-flex align-items-center card pt-3 px-3 cartas" style="">
                    <div style="width: 100%; height: 19rem; background-repeat: no-repeat; background-size: cover; background-image: url({{asset('img/design/Sektor/home/imagen02.png')}})">
                    {{-- <img src="{{asset('img/design/Sektor/home/imagen02.png')}}" alt=""> --}}
                    </div>
                    <div class="col-11 mt-2 px-4" style="text-align: center; font-size: 1.8rem">Guardia de seguridad</div>
                    <div class="col-4 border border-danger border-2 my-3" style="border-radius: 23px"></div>
                    <div class="col-12" style="font-weight: bold; text-align: center; font-size: 1.5rem">CAMINO AL ITESO</div>
                </div>

            </div>
            @php
            $cartas++; 
        @endphp
        @endwhile
        <div class="col-12 d-flex justify-content-center align-items-center" style="background: rgba(0, 0, 0, 0.311); z-index: 10;  position: absolute; top:0; bottom: 0; border-radius: 16px;">
            <p style="color: white; font-size: 2rem; font-weight: bold;">SECCION NO EDITABLE</p>
        </div>
    </div>
    
    <div class="col-12 d-flex flex-wrap justify-content-center align-items-center" style="margin-top: 90px ">
        <div class="col-12" style="text-align: center; font-size: 3.5rem; font-weight: 100;">¿Como podemos ayudarte?</div>
        <div class="col-4" style="text-align: center; font-size: 1.2rem; margin-bottom: 80px">seres humanos funcionales en todas las areas de su vida, a traves de herramientas a ellos.</div>
        <div class="col-12 d-flex flex-wrap justify-content-center align-items-center" style="padding-top: 50px; position: relative;">
            <input class="inp-form" type="text" name="" id="" placeholder="Nombre" style="border:solid; border-radius: 23px; padding: 15px 60px 15px 60px">
            <input class="inp-form" type="text" name="" id="" placeholder="Whatsapp" style="border:solid; border-radius: 23px; padding: 15px 60px 15px 60px; margin: 0px 20px 0px 20px;">
            <input class="inp-form" type="text" name="" id="" placeholder="Mensaje" style="border:solid; border-radius: 23px; padding: 15px 60px 15px 60px">
            <div class="col-12 d-flex justify-content-center align-items-center" style="margin: 50px 0px 50px 0px">
                <button class="button-dos">Enviar</button>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center" style="background: rgba(0, 0, 0, 0.311); z-index: 10;  position: absolute; top:0; bottom: 0; border-radius: 16px;">
                <p style="color: white; font-size: 2rem; font-weight: bold;">SECCION NO EDITABLE</p>
            </div>
        </div>
    </div>
    </div>  


@endsection
@section('jsLibExtras2')
	<script src="{{asset('js/dropify.js')}}" charset="utf-8"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection
@section('jqueryExtra')
<script type="text/javascript">
$('.dropify').dropify();

$('#up_file_portada').change(function(e) {
		$('#Form_portada').submit();
	});

    $('#up_file_slider').change(function(e) {
		$('#form_slider').submit();
	});

	$('.carru').slick({
	infinite: false,
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows:false,
    dots: true,
	});
	$('.multiple-items2').slick({
	infinite: false,
	slidesToShow: 4,
	slidesToScroll: 1,
	arrows:false,
	responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 2,
slidesToScroll: 1
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
	});
</script>
<!-- Facebook Pixel Code -->

	<!-- End Facebook Pixel Code -->
	

@endsection
