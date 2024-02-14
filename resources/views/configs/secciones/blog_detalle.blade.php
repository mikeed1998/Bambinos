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

.titulo_detalle{
        font-family: tommy6;
        font-size: 6rem;
        line-height: 6.5rem;
    }

    .fecha_detalle{
        font-family: tommy2;
        font-size: 1.3rem;
    }

    .img_detalle{
        width: 100%;
        border-radius: 36px;
    }

	.img_detalle-2{
        width: 100%;
        border-radius: 36px;
		height: 250px;
    }

    .txt_detalle{
        font-family: tommy2;
        font-size: 1.4rem;
        text-align: justify;
    }

    .header-instagram{
    font-size: 1.6rem;
    }

    .header-face{
        font-size: 1.3rem;
    }

    .bottom_detalle{
        font-family: tommy6;
        font-size: 1.4rem;
    }

    a.detalle{
    color: #000000;
    cursor: pointer;
  }

  a.detalle:hover{
    color: #FFECC1;
  }

  .div-blog-detalle{
    background-color: #f4f4f4; 
    border-radius: 36px; z-index: 0; 
    padding-top: 150px
  }

.tox{
    width: 100%;
    min-height: 700px !important;
}

			.trash{
				opacity: 100%;
				transition: 0.5s all;
			}
			.trash:hover{
				opacity: 90%;
				color: red;
			}

			.btn-txt{
				height: 100px;
				 background-color: #ffffff; 
				 border: none;
				 transition: ease, 0.3s;
				}

			.btn-txt:hover{
				background-color: rgba(166, 255, 0, 0.414);
			}

			.custom-input{
				height: 100px;
				 background-color: #ffffff; 
				 border: none;
				 transition: ease, 0.3s;
			}

			.custom-input:hover{
				background-color: #0062ff95;
			}
		</style>
@endsection

{{-- contenido de la pagina --}}
@section('content')
<div class="row mb-4 px-2">
	<a href="{{ route('config.seccion.show','proyects') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
</div>

<div class="col-12 text-center mb-3 py-2" style="background: black; border-radius: 46px;">
	<h3 style="color: white;">Editar Blog</h3>
</div>

<form class="col-12 d-flex justify-content-center align-items-center" action="{{route('config.seccion.elimblog')}}" method="POST" style="z-index: 999">
	@csrf
	<input type="text" name="id_blog" value="{{$blog->id}}" hidden>
	<button type="submit" style="background: none; border:none;" ><i class="fa-solid fa-trash trash" style="; font-size:30px;"><div style="font-family: tommy3">Eliminar Blog</div></i></button>
</form>

<div class="col-12 d-flex flex-wrap justify-content-center px-4 pb-5" style="background-color:">
    {{-----------------------------------------------------------------------------------------------------Buscadores-----------------------------------------------------------------------------------------------------}}
    <div class="col-12 d-flex flex-wrap justify-content-center border border-dark pb-5 div-blog-detalle mb-5" style="">
         <div class="col-11 d-flex flex-wrap justify-content-center" style="height:">
         <textarea class="col-11 titulo_detalle editar_text_seccion_global"  data-id="{{$blog->id}}" data-url="{{route('config.seccion.textglobalseccion')}}" data-table="services" data-campo="titulo">{{$blog->titulo}}</textarea>
		 <form id="Form_portada_servicio" action="{{route('config.seccion.adPortada_servicios')}}" method="POST" class="col-12 mb-3 d-flex justify-content-center flex-column" style="height: 120px;" enctype="multipart/form-data">
			@csrf
			<input type="text" name="id_prod" value="{{$blog->id}}" hidden>
			<div class="col-12 text-center">
				<h5>Cambiar portada del blog</h5>
			</div>
			<input type="file" name="uploadedfile" id="up_file_portada_servicio" class="dropify" style="border-radius:10px !important;" data-allowed-file-extensions="jpg png jpeg">
		</form>
         <img class="img_detalle" src="{{asset('img/photos/servicios/'.$blog->image)}}" style="width: 100%; height: ;" alt="">
         </div>
    </div>

	<form class="col-6 d-flex flex-column justify-content-center align-items-center" action="{{route('config.seccion.upTxt')}}" method="POST">
	@csrf
	<input type="text" name="id_blog_texto" value="{{$blog->id}}" hidden>
	<input type="text" name="blog_content" value="0" hidden>
	<button class="col-12 border btn-txt" style="">AGREGAR UN PARRAFO AL BLOG</button>
	<div class="col-12 text-center">
		<h5></h5>
	</div>
	</form>

	<form id="form_imagen_blog" class="col-6 d-flex flex-column justify-content-center align-items-center" action="{{route('config.seccion.upImagen')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="text" name="id_blog_imagen" value="{{$blog->id}}" hidden>
		<input type="text" name="blog_content" value="1" hidden>
		<input type="file" style="display: none;" name="uploadedfile" id="up_file_imagen_blog" class="input_blog_img" style="border-radius:26px !important;" data-allowed-file-extensions="jpg png jpeg">
		<button type="button" class="col-12 border custom-input" onclick="document.querySelector('.input_blog_img').click();">AGREGAR UNA IMAGEN AL BLOG</button>
		<div class="col-12 text-center">
			<h5></h5>
		</div>
		</form>

	@foreach ($detalle as $d)
		@if ($d->contenido == 0)

		<div class="col-12 d-flex justify-content-center align-items-center" style="position: relative">

<form action="{{route('config.seccion.delete_detalle_blog')}}" method="POST" style="position: absolute; right: 0; ">
	@csrf
	<input type="text" name="id_detail" value="{{$d->id}}" hidden>
<button type="submit" style="background-color: transparent; border: none"><i class="fa-solid fa-trash trash" style="font-size: 2rem; cursor: pointer;"></i></button>
</form>

			
		<textarea rows="7" class="col-11 txt_detalle mt-5 editar_text_seccion_global" data-id="{{$d->id}}" data-url="{{route('config.seccion.textglobalseccion')}}" data-table="Blog_desc" data-campo="texto">{{$d->texto}}</textarea>
		</div>

		@else

		<div class="col-12 d-flex flex-column justify-content-center align-items-center mt-5" style="position: relative">
			<form action="{{route('config.seccion.delete_detalle_blog')}}" method="POST" style="position: absolute; right: 0; bottom: 8rem;">
				@csrf
				<input type="text" name="id_detail" value="{{$d->id}}" hidden>
			<button type="submit" style="background-color: transparent; border: none"><i class="fa-solid fa-trash trash" style="font-size: 2rem; cursor: pointer;"></i></button>
			</form>
			<form id="Form_blog_content" action="{{route('config.seccion.up_blog_image')}}" method="POST" class="col-10 mb-3 d-flex justify-content-center flex-column" style="height: 120px;" enctype="multipart/form-data">
				@csrf
				<input type="text" name="id_blog" value="{{$d->id}}" hidden>
				<div class="col-12 text-center">
					<p>Cambiar imagen</p>
				</div>
				<input type="file" name="img_blog" id="up_file_blog_content" class="dropify" style="border-radius:10px !important;" data-allowed-file-extensions="jpg png jpeg">
			</form>
			<img class="col-11 img_detalle-2" src="{{asset('img/photos/servicios/'.$d->imagen)}}" alt="">
		</div>


		@endif
	@endforeach

		{{-- <form action="{{route('config.seccion.guardarContenido')}}" method="POST" class="col-12 d-flex flex-wrap align-items-center justify-content-center ">
				@csrf
		<div id="editor" name="txt" class="col-12 txt_detalle mt-5">{{$blog->descripcion}}</div>
		<button type="submit">yes</button>
		</form> --}}

     </div>
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
	$('#up_file_portada_servicio').change(function(e) {
		$('#Form_portada_servicio').submit();
	});

	$('#up_file_blog_content').change(function(e) {
		$('#Form_blog_content').submit();
	});

	$('#up_file_imagen_blog').change(function(e) {
		$('#form_imagen_blog').submit();
	});

	$('.dropify').dropify();
</script>

<script> 
var quill = new Quill('#editor', {
	theme: 'snow'  // Elige un tema que se adapte a tu diseño
});
</script>

{{-- <script>
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
tinymce.init({
  selector: 'textarea#file-picker',
  plugins: 'image code',
  toolbar: 'undo redo | link image | code',
  image_title: true,
  automatic_uploads: true,
  file_picker_types: 'image',
  images_upload_url: "{{route('config.seccion.upimagen')}}",

  images_upload_handler: function (blobInfo, success, failure) {
    const xhr = new XMLHttpRequest();
    const formData = new FormData();

    xhr.open('POST', "{{ route('config.seccion.upimagen') }}"	);
    xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);

    xhr.onload = function () {
        if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            success(response.location);
        } else {
            failure('Error al cargar la imagen');
        }
    };

    formData.append('file', blobInfo.blob(), blobInfo.filename());
    xhr.send(formData);
},


  file_picker_callback: (cb, value, meta) => {
    const input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    input.addEventListener('change', (e) => {
      const file = e.target.files[0];
      const reader = new FileReader();

      reader.addEventListener('load', () => {
        const id = 'blobid' + (new Date()).getTime();
        const blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        const base64 = reader.result.split(',')[1];
        const blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        cb(blobInfo.blobUri(), { title: file.name });
      });
      reader.readAsDataURL(file);
    });
    input.click();
            
  },
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
});
</script> --}}
@endsection


