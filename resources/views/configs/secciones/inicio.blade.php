
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


@endsection
@section('jsLibExtras2')
	<script src="{{asset('js/dropify.js')}}" charset="utf-8"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection
@section('jqueryExtra')
<script type="text/javascript">
$('.dropify').dropify();

    $('#up_file_slider').change(function(e) {
		$('#form_slider').submit();
	});

</script>	

@endsection
