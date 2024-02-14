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

			
	/* -------------------------------------------------------------------------------------------------------------------------------- */
	
			.black-skin .btn-primary {
				background-color: blue !important;
			}

			.black-skin .btn-secondary {
				background-color: red !important;
			}

			.price{
				font-family: tommy1;
				font-size: 2rem;
			}
	
			.shop-card{
				font-family: tommy4;
				font-size: 2rem;
			}
	
			a {
				all: initial;
			}
	
			.titulo-card-prod{
				font-family: tommy4;
				font-size: 4rem;
				line-height: 4rem;
			}
	
			.info-card-prod{
				font-family: tommy2;
				font-size: 1.6rem;
			}
	
			.price-card-prod{
				font-family: tommy2;
				font-size: 2.6rem;
			}
	
			.txt-card{
				font-family: gotan5;
				font-size: 6rem;
				color:#FFECC1 ;
				position: absolute; 
				-webkit-text-stroke: 1px black;
			}
			.txt-card-2{
				font-family: gotan5;
				font-size: 6rem;
				color:#000000 ;
				position: absolute; 
				padding-top: 0.8rem;
				padding-left: 0.5rem;
				-webkit-text-stroke: 1px black;
			}
	
			.img-prod-shop{
				max-height: 20rem;
			}
	
			.img-prod-detalle{
				max-height: 20rem;
			}
	
			.div-prod-detalle{
				background-color: #ffffff; 
				height: 640px; 
				border-radius: 26px; 
				position: relative;
			}

			input::placeholder{
				color: #000000;
			}

			.trash{
				opacity: 100%;
				transition: 0.5s all;
			}
			.trash:hover{
				opacity: 90%;
				color: red;
			}
	
	.butondelete{
		background-color: rgb(255, 68, 68);
		color: #ffffff;
		border: solid 1px #000000;
		border-radius: 26px;
		height: 40px;
		width: 120px;
		transition: ease 0.5s;
	}

	.butondelete:hover{
		background-color: rgb(255, 95, 95);
		color: #000000;
		margin-bottom: 10px;
	}

	.titlecampos{
		font-size: 3.5rem;
		font-weight: bolder;
	}
		</style>
@endsection

{{-- contenido de la pagina --}}
@section('content')
<div class="row mb-4 px-2">
	<a href="{{ route('config.seccion.show','products') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
</div>

<div class="col-12 text-center mb-3 py-2" style="background: black; border-radius: 46px;">
	<h3 style="color: white;">Editar Vacante</h3>
</div>

<div class="col-12 d-flex flex-wrap justify-content-center px-4 pb-5" style="background-color:; height:; position: relative;">
	<form class="" action="{{route('config.seccion.elimp')}}" method="POST" style="z-index: 999">
		@csrf
		<input type="text" name="id_p" value="{{$producto->id}}" hidden>
		<button type="submit" style="background: none; border:none;" ><i class="fa-solid fa-trash trash" style="position: absolute; top: 30px; right: 40%; font-size:30px;"><div style="font-family: tommy3">Eliminar Vacante</div></i></button>
	</form>
	{{-----------------------------------------------------------------------------------------------------Buscadores-----------------------------------------------------------------------------------------------------}}
	<div class="col-12 d-flex flex-wrap justify-content-center pb-5 mt-5" style="background-color: #; border-radius: 36px; z-index: 0; height:;">
 <div class="col-12 d-flex flex-wrap mb-4" style="padding-top: 10px">
	<div class="col-12 my-4 d-flex justify-content-center align-items-center text-center flex-column">
		<input id="input-disable-cate" type="text" class="form-control text-center mb-3" value="Categoria : @if(!empty($categoria)) {{$categoria->nombre}} @else No hay categoria agregada @endif " disabled>
		<div class="col-12">
			<select id="select-cate" class="form-select mb-2 editar_text_seccion_global" data-id="{{$producto->id}}" data-url="{{route('config.seccion.textglobalseccion')}}" data-table="Producto" data-campo="categoria" name="" aria-label="Default select example">
				<option selected>Categoria</option>
				@foreach($categorias as $c)
				<option data-cate="{{$c->nombre}}" value="{{$c->id}}">{{$c->nombre}}</option>
				@endforeach
			  </select>
		</div>
		<div class="col-12" style="font-style:; font-weight: bolder">Cantidad disponible: <input class="form-control editar_text_seccion_global" type="number" name="" id="" value="{{$producto->cantidad}}" data-id="{{$producto->id}}" data-url="{{route('config.seccion.textglobalseccion')}}" data-table="Producto" data-campo="cantidad"></div>
	</div>

	<div class="col-12 d-flex justify-content-end mb-4">
	<label class="col-4 switch" style="position: relative; top:10px; right: 10px;">
		<input id="checkIni_{{$producto->id}}" data-id="{{$producto->id}}" data-campo="inicio" type="checkbox" @if($producto->inicio == 1) checked @endif >
		<span class="slider round"></span>
	</label>
</div>
<script>
	$('#checkIni_'+{{$producto->id}}).change(function (e){
		var checkbox = $(this); // Almacenar una referencia al elemento
		console.log('checkIni_'+{{$producto->id}});
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
		var URL = "{{route('config.seccion.updateIni')}}";
		
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
			toastr["error"]('Error al agregar el producto al inicio');
		});
	});
</script>
	 <div class="col-12 col-md-12 col-lg-5 ps-2 ps-md-2 ps-lg-4 pe-2 ">
		 <div class="col-12 border border-dark div-prod-detalle" style="">
			 <div class="col-12 d-flex justify-content-center align-items-center" style="position: absolute; background: ; height: 100%;">
				 <img class="img-prod-detalle" style="" src="{{asset('img/photos/productos/'.$producto->portada)}}" alt="">
			 </div>
			 <form id="Form_portada" action="{{route('config.seccion.adPortada')}}" method="POST" class="col-12 mb-3 d-flex justify-content-center flex-column" style="height: 120px;" enctype="multipart/form-data">
				@csrf
				<input type="text" name="id_prod" value="{{$producto->id}}" hidden>
				<div class="col-12 text-center">
					<h5>Cambiar portada de la vacante</h5>
				</div>
				<input type="file" name="uploadedfile" id="up_file_portada" class="dropify" style="border-radius:10px !important;" data-allowed-file-extensions="jpg png jpeg">
			</form>
		 </div>
	 </div>
	 <div class="col-12 col-md-12 col-lg-7 pe-2 pe-md-2 pe-lg-4 ps-2 ">
		 <div class="col-12 border border-dark d-flex align-items-center flex-wrap px-2 px-md-5 px-lg-5 pt-4 pb-5 " style="background-color: #ffffff; height: 640px; border-radius: 26px;">
			<div class="col-12 d-flex flex-wrap justify-content-center align-items-center">
				Nombre Puesto:
			 </div>
		 <textarea rows="2" class="col-12 titulo-card-prod editar_text_seccion_global" data-id="{{$producto->id}}" data-url="{{route('config.seccion.textglobalseccion')}}" data-table="Producto" data-campo="nombre">{{$producto->nombre}}</textarea>
		 <div class="col-12 d-flex flex-wrap justify-content-center align-items-center">
			Subnombre:
		 </div>
		 <textarea rows="2" class="col-12 info-card-prod editar_text_seccion_global" data-id="{{$producto->id}}" data-url="{{route('config.seccion.textglobalseccion')}}" data-table="Producto" data-campo="subnombre">{{$producto->subnombre}}</textarea>
		 <div class="col-12 d-flex flex-wrap justify-content-center align-items-center">
			Descripcion:
		 </div>
		 <textarea rows="4" class="col-12  editar_text_seccion_global" style="" data-id="{{$producto->id}}" data-url="{{route('config.seccion.textglobalseccion')}}" data-table="Producto" data-campo="descripcion">{{$producto->descripcion}}</textarea>
		 <div class="col-12 d-flex flex-wrap">
			<div class="col-6 d-flex justify-content-center align-items-center">Oferta</div>
			<div class="col-6 d-flex justify-content-center align-items-center">Requisitos</div>
		 </div>
		 <textarea rows="3" class="col-6 editar_text_seccion_global" data-id="{{$producto->id}}" data-url="{{route('config.seccion.textglobalseccion')}}" data-table="Producto" data-campo="color">{{$producto->color}}</textarea>
		 <textarea rows="3" class="col-6 editar_text_seccion_global" data-id="{{$producto->id}}" data-url="{{route('config.seccion.textglobalseccion')}}" data-table="Producto" data-campo="requisitos">{{$producto->requisitos}}</textarea>
		 <div class="col-12 d-flex flex-wrap justify-content-center align-items-center">
			Sueldo:
		 </div>
		 <div class="col-1 titulo-card-prod">$</div><input type="text" class="col-11 col-md-6 col-lg-6 titulo-card-prod editar_text_seccion_global" data-id="{{$producto->id}}" data-url="{{route('config.seccion.textglobalseccion')}}" data-table="Producto" data-campo="precio" value="{{$producto->precio}}">
		</div> 
		 </div>
	 </div>

 </div>
 <div class="col-12 d-flex justify-content-center align-items-center mb-5"> 
	<div data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer; font-size: 1.6rem">Agregar campos: <i class="fa-solid fa-plus ms-4"></i></div>
	</div>

<div class="col-12 d-flex flex-column justify-content-center align-items-center">
	<div class="col-12 titlecampos">Aplicacion</div>
	<div class="col-8 d-flex flex-wrap justify-content-center align-items-center">
		@foreach ($servicios1 as $s)
		<form action="{{route('config.seccion.deletecampo')}}" method="post" class="col-12 d-flex flex-wrap justify-content-center align-items-center">
			@csrf
	
		<div class="col-2 d-flex justify-content-end align-items-center my-4 text-end">
			{{$s->titulo}}
		</div>
	
		<div class="col-7 d-flex justify-content-center align-items-center">
	@if ($s->inicio == 1)
	<input type="text " name="" id="" readonly>
	@elseif ($s->inicio == 2)
	
	<div class="col-12 d-flex flex-wrap justify-content-center align-items-center">
	
	<div class="col-12 d-flex justify-content-center align-items-center text-center ms-5">
		<input class="col-12 d-flex justify-content-center align-items-center ms-5" type="file" id="pdf" disabled>
	</div>
	
	<label class="col-12 d-flex justify-content-center align-items-center" for="pdf">(PDF)</label>
	</div> 
	
	@elseif ($s->inicio == 3)
	<div class="col-12 d-flex flex-wrap justify-content-center align-items-center">
	<div class="col-12 d-flex justify-content-center align-items-center text-center ms-5">
		<input class="col-12 d-flex justify-content-center align-items-center ms-5" type="file" id="pdf" disabled>
	</div>
	<label class="col-12 d-flex justify-content-center align-items-center" for="img">(PNG,JPG)</label>
	</div> 
	@endif
		</div>
	
		<div class="col-3 d-flex justify-content-start align-items-start">
			<input type="hidden" name="idCampo" value="{{$s->id}}" id="">
				<div class=""><button type="submit" class="butondelete"><i class="fa-solid fa-trash"></i> Eliminar</button></div>
		</div>
	</form>
	@endforeach
	 </div> 
	<div class="col-12 titlecampos mt-5">Documentos</div>
	<div class="col-8 d-flex flex-wrap justify-content-center align-items-center">
		@foreach ($servicios2 as $s)
		<form action="{{route('config.seccion.deletecampo')}}" method="post" class="col-12 d-flex flex-wrap justify-content-center align-items-center">
			@csrf
	
		<div class="col-2 d-flex justify-content-end align-items-center my-4 text-end">
			{{$s->titulo}}
		</div>
	
		<div class="col-7 d-flex justify-content-center align-items-center">
	@if ($s->inicio == 1)
	<input type="text " name="" id="" readonly>
	@elseif ($s->inicio == 2)
	
	<div class="col-12 d-flex flex-wrap justify-content-center align-items-center">
	
	<div class="col-12 d-flex justify-content-center align-items-center text-center ms-5">
		<input class="col-12 d-flex justify-content-center align-items-center ms-5" type="file" id="pdf" disabled>
	</div>
	
	<label class="col-12 d-flex justify-content-center align-items-center" for="pdf">(PDF)</label>
	</div> 
	
	@elseif ($s->inicio == 3)
	<div class="col-12 d-flex flex-wrap justify-content-center align-items-center">
	<div class="col-12 d-flex justify-content-center align-items-center text-center ms-5">
		<input class="col-12 d-flex justify-content-center align-items-center ms-5" type="file" id="pdf" disabled>
	</div>
	<label class="col-12 d-flex justify-content-center align-items-center" for="img">(PNG,JPG)</label>
	</div> 
	@endif
		</div>
	
		<div class="col-3 d-flex justify-content-start align-items-start">
			<input type="hidden" name="idCampo" value="{{$s->id}}" id="">
				<div class=""><button type="submit" class="butondelete"><i class="fa-solid fa-trash"></i> Eliminar</button></div>
		</div>
	</form>
	@endforeach
	 </div> 
</div>



 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
	  <div class="modal-content">
			<form action="{{route('config.seccion.agregarcampo')}}" method="POST">
				@csrf
		<div class="modal-header">
		  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  <div class="col-12 d-flex justify-content-center">
			<div class="col-12">
				<div class="mb-3">
					<label for="recipient-name3" class="col-form-label">Apartado del campo</label>
					<select name="opciones_cate" id="" class="form-control" id="recipient-name3">
						<option value="" selected >Elige una opcion</option>
						<option value="7">Aplicacion</option>
						<option value="8">Documentos</option>
					</select>
					<input type="hidden" name="idProd" value="{{$producto->id}}">
				</div>
				<div class="mb-3">
					<label for="recipient-name" class="col-form-label">Nombre del campo:</label>
					<input type="text" class="form-control" id="recipient-name" name="nomCam">
				</div>
				<div class="mb-3">
					<label for="recipient-name2" class="col-form-label">Nombre del campo:</label>
					<select name="opciones" id="" class="form-control" id="recipient-name2">
						<option value="" selected >Elige una opcion</option>
						<option value="1">Texto</option>
						<option value="2">Archivo (PDF)</option>
						<option value="3">Imagen (PNG, JPG)</option>
					</select>
					<input type="hidden" name="idProd" value="{{$producto->id}}">
				</div>
				</div>
		  </div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
		  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
		</div>
	</form>
	  </div>
	</div>
  </div>
	</div>
 



<!-- Modal Agregar imagenes -->

<!-- Modal Agregar imagenes -->
@endsection
{{-- contenido de la pagina --}}

@section('jsLibExtras2')
	<script src="{{asset('js/dropify.js')}}" charset="utf-8"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" ></script>
@endsection

@section('jqueryExtra')
<script type="text/javascript">



	function addidprod(id){
		$('#id_prod_input').val(id);
	}
	

	$('#select-color').change(function(e) {
		var color = $(this).find(":selected").data("color");
		$('#color-circle').css('background', color);
	});

	$('#select-cate').change(function(e) {
		var categoria = $(this).find(":selected").data("cate");
		$('#input-disable-cate').val('Categoria : '+categoria);
	});


	$('#up_file_portada').change(function(e) {
		$('#Form_portada').submit();
	});

	$('.dropify').dropify();

	$('.galImg').slick({
            dots:true,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            });
	
</script>
@endsection
