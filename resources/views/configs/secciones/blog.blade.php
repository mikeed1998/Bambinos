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
			/* mas estilisado */	
				body{
					background-color: #e5e8eb  !important;
				}
				.card-header {
					background-color: #b0c1d1  !important;
				}
				.black-skin .btn-primary {
					background-color: #b0c1d1  !important;
				}
				.btn {
					box-shadow: none;
					border-radius: 15px;
				}
			/* mas estilisado */
			.card-slick{
				background: white;
				color: black;
				transform: scaleY(1);
				height: 307px;
				transition: all 0.5s;
			}
			.card-slick:hover{
				
				background: #9bb938;
				color: white;
				margin-top: -60px;
				height: 367px;
				position: relative;
				z-index: 1000;
				transition: all 0.5s;
			}

			.camp_img{
				opacity: 0%;
				transition: all 0.5s;
			}

			.camp_img_cont:hover{
				
			}
			.camp_img_cont:hover .camp_img{
				opacity: 100%;
				background: #3a3a3a;
				transition: all 0.5s;
			}
			.edit-cuadro{
				background: rgba(72, 72, 72, 0.547);
				transition: all 0.2s;
			}
			.edit-cuadro:hover{
				background: rgba(72, 72, 72, 0.9);
				transition: all 0.2s;
			}
			.edit-n{
				opacity: 0%;
				transition: all 0.5s;
			}

			.edit-cuadro:hover .edit-n{
				opacity: 100%;
				transition: all 0.5s;
			}

		/* Formateamos el label que servirá de contenedor */
			.switch {
			position: relative;
			display: inline-block;
			width: 60px;
			height: 34px;
			}
			
			/* Ocultamos el checkbox html */
			.switch input {
			display:none;
			}
			
			/* Formateamos la caja del interruptor sobre la cual se deslizará la perilla de control o slider */
			.slider {
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #ccc;
			-webkit-transition: .4s;
			transition: .4s;
			}
			
			/* Pintamos la perilla de control o slider usando el selector before */
			.slider:before {
			position: absolute;
			content: "";
			height: 26px;
			width: 26px;
			left: 4px;
			bottom: 4px;
			background-color: white;
			-webkit-transition: .4s;
			transition: .4s;
			}
			
			/* Cambiamos el color de fondo cuando el checkbox esta activado */
			input:checked + .slider {
			background-color: #7aa2e2;
			}
			
			/* Deslizamos el slider a la derecha cuando el checkbox esta activado */ 
			input:checked + .slider:before {
			-webkit-transform: translateX(26px);
			-ms-transform: translateX(26px);
			transform: translateX(26px);
			}
			
			/* Aplicamos efecto de bordes redondeados en slider y en el fondo del slider */
			.slider.round {
			border-radius: 34px;
			}
			
			.slider.round:before {
			border-radius: 50%;
			}
		/* Formateamos el label que servirá de contenedor end */

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

			.cargado{
				background: rgba(0, 128, 0, 0.715) !important;
			}
	</style>
	<style>

		.card{
			
		}

		@media only screen and (max-width: 768px){  
			.cont_circle{
				bottom: -150px !important;
			}
			.circle_slider{
				width: 300px !important; 
				height: 300px !important;
			}
			.img_circle{
				margin-top: -120px !important;
			}
		}  
		@media only screen and (max-width: 390px){  
			.cont_circle{
				bottom: -100px !important;
			}
			.circle_slider{
				width: 200px !important; 
				height: 200px !important;
			}
			.img_circle{
				margin-top: -80px !important;
			}
			.img_product{
				margin-left: 0px !important;
			}
		}

	</style>

<style>
/*------------------------------------------------------Estilos para boton------------------------------------------------------*/
		.btn-fresh {
		--color: #000000;
		background-color: #ffffff;
		font-family: tommy3;
		display: inline-block;
		width: 9em;
		height: 3em;
		line-height: 2.5em;
		margin:;
		position: relative;
		overflow: hidden;
		border: 2px solid var(--color);
		transition: color .5s;
		z-index: 1;
		font-size: 1.3rem;
		border-radius: 43px;
		font-weight: 400;
		color: var(--color);
		}
		
		.btn-fresh:before {
		content: "";
		position: absolute;
		z-index: -1;
		background: var(--color);
		height: 200px;
		width: 380px;
		border-radius: 50%;
		}
		
		.btn-fresh:hover {
		color: #ffffff;
		}
		
		.btn-fresh:before {
		top: 100%;
		left: 100%;
		transition: all .4s;
		}
		
		.btn-fresh:hover:before {
		top: -35px;
		left: -30px;
		}
		
		.btn-fresh:active:before {
		background: #ffffff00;
		transition:;
		}
		
		.btn-fresh-2 {
		--color: #000000;
		background-color: #ffffff;
		font-family: tommy2;
		display: inline-block;
		width: 9em;
		height: 2.7em;
		line-height: 2.5em;
		margin:;
		position: relative;
		overflow: hidden;
		border: 1px solid var(--color);
		transition: color .5s;
		z-index: 1;
		font-size: 1.2rem;
		border-radius: 43px;
		font-weight: 400;
		color: var(--color);
		}
		
		.btn-fresh-2:before {
		content: "";
		position: absolute;
		z-index: -1;
		background: var(--color);
		height: 200px;
		width: 380px;
		border-radius: 50%;
		}
		
		.btn-fresh-2:hover {
		color: #ffffff;
		}
		
		.btn-fresh-2:before {
		top: 100%;
		left: 100%;
		transition: all .4s;
		}
		
		.btn-fresh-2:hover:before {
		top: -35px;
		left: -30px;
		}
		
		.btn-fresh-2:active:before {
		background: #ffffff00;
		transition:;
		}
		
		.shop-div {
		--color: #000000;
		--color2: #FFECC1;
		background-color: #ffffff;
		display: inline-block;
		width: 5rem;
		height: 2.7em;
		line-height: 2.5em;
		text-align: center;
		align-items: center;
		position: relative;
		overflow: hidden;
		border: 1px solid var(--color);
		transition: color .5s;
		z-index: 1;
		font-size: 1.2rem;
		border-radius: 43px;
		}
		
		.shop-div:before {
		content: "";
		position: absolute;
		z-index: -1;
		background: var(--color2);
		height: 200px;
		width: 380px;
		border-radius: 50%;
		}
		
		.shop-div:hover {
		color: #ffffff;
		}
		
		.shop-div:before {
		top: 100%;
		left: 100%;
		transition: all .4s;
		}
		
		.shop-div:hover:before {
		top: -35px;
		left: -30px;
		}
		
		.shop-div:active:before {
		background: #ffffff00;
		transition:;
		}
/*------------------------------------------------------Estilos para boton------------------------------------------------------*/

/*------------------------------------------------------Estilos para boton------------------------------------------------------*/
	/* The switch - the box around the slider */
	.switch {
	font-size: 17px;
	position: relative;
	display: inline-block;
	width: 3.5em;
	height: 2em;
	}

	/* Hide default HTML checkbox */
	.switch input {
	opacity: 0;
	width: 0;
	height: 0;
	}

	/* The slider */
	.slider {
	position: absolute;
	cursor: pointer;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #fff;
	border: 1px solid #adb5bd;
	transition: .4s;
	border-radius: 30px;
	}

	.slider:before {
	position: absolute;
	content: "";
	height: 1.4em;
	width: 1.4em;
	border-radius: 20px;
	left: 0.27em;
	bottom: 0.25em;
	background-color: #adb5bd;
	transition: .4s;
	}

	input:checked + .slider {
	background-color: #007bff;
	border: 1px solid #007bff;
	}

	input:focus + .slider {
	box-shadow: 0 0 1px #007bff;
	}

	input:checked + .slider:before {
	transform: translateX(1.4em);
	background-color: #fff;
	}
/*------------------------------------------------------Estilos para boton------------------------------------------------------*/

    .img-cont-blog{
            border-radius: 36px; 
            background-size: cover; 
            background-repeat: no-repeat; 
            height: 500px;
        }


        .txt-seccion-blog{
            font-family: tommy6;
            font-size: 2rem;
        }

        .txt-txt-blog{
            font-family: tommy2;
            font-size: 1.4rem;
            text-align: justify;
        }

        .div-blog{
            padding-top: 110px;
        }

		.btn-blog{
			cursor: pointer;
			background-color: #f4f4f4; 
			border-radius: 36px; 
			z-index: 0;
		}

		.btn-blog:hover{
			background-color: #b8b8b893;
			z-index: 999;		
		}

		a {
    text-decoration: none; /* Elimina el subrayado */
    color: #000000; /* Utiliza el color heredado del elemento padre */
}
		a:hover{
			text-decoration: none; /* Elimina el subrayado */
    color: #000000; /* Utiliza el color heredado del elemento padre */
		}
	
		</style>
@endsection

{{-- contenido de la pagina --}}
@section('content')
<div class="row mb-4 px-2">
	<a href="{{ route('config.seccion.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
</div>

<div class="col-12 text-center d-flex justify-content-center flex-column mb-5">
	<h4>Agregar blog</h4>
		<button style="background: none !important; border:none;"  data-bs-toggle="modal" data-bs-target="#modalproductos"><i class="fa-solid fa-circle-plus" style="font-size: 2rem;"></i></button>
</div>

@foreach ($blogs as $b)

<div class="col-12 d-flex flex-wrap justify-content-center px-4 pb-5 " style="background-color:" id="">
	
	<label class="switch" style="">
		<input id="checkIni_{{$b->id}}" data-id="{{$b->id}}" data-campo="inicio" type="checkbox" @if($b->inicio == 1) checked @endif >
		<span class="slider round"></span>
	</label>
	
    <div class="col-12 d-flex flex-wrap justify-content-between border border-dark mb-5 btn-blog" style="">
		<a class="col-12 d-flex" href="{{route('config.seccion.servicioDetalle',$b->id)}}">
 <div class="col-12 d-flex" style="">
     <div class="col-12 d-flex flex-wrap justify-content-center align-items-center" style="height: 100%; background-color:;">
         <div class="col-12 col-md-12 col-lg-5 ps-0 ps-md-5 ps-lg-5 d-flex flex-wrap mt-5 align-items-center">
             <div class="col-12 txt-seccion-blog ps-2 p-md-0 p-lg-0 d-flex align-items-center">{{$b->titulo}}</div>
			 @php
				 $cont = count($b->detalle_word);
			 @endphp
			 
             <div class="col-12 d-flex align-items-center txt-txt-blog ps-2 p-md-0 p-lg-0 pt-2 pe-2 pe-md-5 pe-lg-5 mb-5 descripcion" id="">@if($cont > 0) {{$b->detalle_word[0]->texto}}@endif</div>
			 
         </div>
         <div class="col-7 px-5 d-flex align-items-center" style="background-color:; height: 100%;">
         <div class="col-12 img-cont-blog" style="height: 80%; background-image: url({{asset('img/photos/servicios/'.$b->image)}});"></div>
		 {{-- <div class="col-12"  style="height: "></div> --}}
     </div>
 
     </div>
 </div>
</a>
    </div>

 </div>     
 <script>
	$('#checkIni_'+{{$b->id}}).change(function (e){
		var checkbox = $(this); // Almacenar una referencia al elemento
		console.log('checkIni_'+{{$b->id}});
		var check = 0;
		if (checkbox.prop('checked')) {
			check = 1;
		} else {
			check = 2;
		}
		console.log(check);
		var id = checkbox.attr("data-id");
		var tcsrf = $('meta[name="csrf-token"]').attr('content');
		var valor = check;
		var URL = "{{route('config.seccion.updateIniBlog')}}";
		
		$.ajax({
			url: URL,
			type: 'post',
			dataType: 'json',
			data: {
				"_method": 'post',
				"_token": tcsrf,
				"id": id,
				"valor": valor
			}
		})
		.done(function(msg) {
			console.log(msg);
			if (msg.success) {
				toastr["success"](msg.mensaje);
				// Cambiar el estado de la casilla de verificación
				if (msg.mensaje.valor == 1) {
					checkbox.prop('checked', true);
				} else if (msg.mensaje.valor == 2) {
					checkbox.prop('checked', false);
				}
			} else {
				toastr["error"](msg.mensaje);
			}
		})
		.fail(function(msg) {
			toastr["error"]('Error al agregar el blog al inicio');
		});
	});
</script>
<script>
    // Selecciona todos los elementos con la clase .descripcion
    var descripcionElements = document.querySelectorAll('.descripcion');

    // Itera a través de cada elemento
    descripcionElements.forEach(function (descripcionElement) {
        var descripcion = descripcionElement.textContent;
        var limitedContent = descripcion.substring(0, 140);

        if (descripcion.length > 140) {
            limitedContent += '...';
        }

        // Actualiza el contenido del elemento actual
        descripcionElement.textContent = limitedContent;
    });
</script>

 @endforeach

{{-- modal agregar producto --}}
<div  class="modal fade" id="modalproductos" data-bs-backdrop="static"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div  class="modal-dialog modal-dialog-centered">
		<form action="{{route('config.seccion.createBlog')}}" method="POST" class="modal-content" style="border-radius: 16px;" enctype="multipart/form-data">
			@csrf
			<div class="modal-header">
			<h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar blog</h1>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<style>
					.backg_producto{
						background: #1555bc !important;
					}
				</style>
				<div class="col-12 mb-2" style="height: 100px; position: relative;">
					<div  class="file-upload col-12 p-0 m-0" style=" top: 0; bottom: 0; background: ; height: 100%;" >
						<input id="input_img_producto" class="m-0 p-0" type="file" name="archivo">
						<label id="label_form_producto" class="col-12 m-0 p-0 d-flex justify-content-center align-items-center" for="input_img_producto" style="opacity: 100%; height: 100%;  border-radius: 16px;">Seleccionar archivo</label>
					</div>
				</div>
				<div class="col-12 d-flex flex-column">
					<input class="form-control mb-2" type="text" name="blogNomb" id="" placeholder="Nombre del Blog">
				</div>
			<script>
				///////////////////// Editar campos imegn categoria ////////////////////

				///////////////////// Editar campos imegn categoria ////////////////////
			</script>
			</div>
			<div class="modal-footer">
			<div class="btn btn-secondary" data-bs-dismiss="modal" style="background: red !important; border:none;">Cerrar</div>
			<button type="submit" class="btn btn-primary" style="background: #1555bc !important; border:none;">Agregar</button>
			</div>
		</form>
	</div>
</div>
{{-- modal agregar producto --}}



@endsection
{{-- contenido de la pagina --}}

@section('jsLibExtras2')
	<script src="{{asset('js/dropify.js')}}" charset="utf-8"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" ></script>
@endsection

@section('jqueryExtra')
<script>
    var descripcionElement = document.querySelector('.descripcion');
    var descripcion = descripcionElement.textContent;
    var limitedContent = descripcion.substring(0, 140);
    
    if (descripcion.length > 140) {
        limitedContent += '...';
    }
    
    descripcionElement.textContent = limitedContent;
</script>

@endsection


