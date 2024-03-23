@extends('layouts.admin')

@section('extraCSS')
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


        body { background-color: #e5e8eb  !important; }

        .card-header { background-color: #b0c1d1  !important; }

        .black-skin
        .btn-primary { background-color: #b0c1d1  !important; }

        .btn {
            box-shadow: none;
            border-radius: 15px;
        }

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
            height: 15rem;
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

        .btn-eliminar{
            color: #ffffff;
            background-color: transparent; 
            border: 1px solid #ffffff;
            cursor: pointer;
            transition: ease 0.2s;
        }

        .btn-eliminar:hover{
            color: #000000;
            background-color: red;
            border: 1px solid #000000;
        }

        textarea{
            background-color: transparent
        }

         ._text_seccion_global{
            border-radius: 23px;
            padding: 1rem 0rem 1rem 0rem;
        }
    </style>
@endsection

@section('content')

    <div class="row mt-5 mb-4 px-2">
        <a href="{{ route('front.admin') }}" class="mt-5 col col-md-2 btn btn-sm btn-dark mr-auto"><i class="fa fa-reply"></i> Regresar</a>
    </div>

    <div class="container" style="">
        <div class="col-12 d-flex flex-wrap justify-content-center align-items-center" style="position: relative;">
            <div class="col-auto d-flex flex-wrap justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal2" style="cursor: pointer">
                <i class="fa-solid fa-plus" style="font-size: 3rem"></i>
                <div class="col-12 text-center">Agregar nueva imagen al carrousel</div>
            </div>
            {{-- -------------------------------------------- Primera parte -------------------------------------------- --}}
             <div class="col-12 d-flex justify-content-center align-items-center" style="height: 50rem; background-color: #353352">
                 <div class="col-12 d-flex flex-wrap justify-content-center" style="">
                     <div class="col-6 d-flex flex-column justify-content-center align-items-center" style="">
                        <i class="fa-solid fa-pencil mb-3" style="color: #ffffff; font-size: 2rem"></i>
                         <textarea class="col-10 titulo-landing _text_seccion_global" rows="4" data-id="{{$elements[1]->id}}" data-url="{{route('seccion.textglobalseccion')}}" data-table="elemento" data-campo="texto">{{$elements[1]->texto}}</textarea>
                        <i class="fa-solid fa-pencil mt-3" style="color: #ffffff; font-size: 2rem"></i>
                         <textarea rows="5" data-id="{{$elements[2]->id}}" data-url="{{route('seccion.textglobalseccion')}}" data-table="elemento" data-campo="texto" class="col-10 descripcion-landing _text_seccion_global">{{$elements[2]->texto}}
                         </textarea>
                         
                     </div>
         
                     <div class="col-6 carrousel-back" style="background-color:; height: 50rem;">
                        @foreach ($carrusel as $c)
                        @if ($c->numeroCarrusel == 1)
                        <div style="position:relative; height: 100%; width: 100%; background-size: cover;background-image: url({{asset('img/carrousel/'.$c->imagen)}});">
                            <form action="{{route('seccion.deleteslider')}}" method="POST" style="position: absolute; top: 1rem; right: 1rem">
                                @csrf
                                <button style="" class="btn-eliminar">Eliminar tarjeta <i class="fa-solid fa-trash"></i></button>
                                <input type="hidden" name="idslider" value="{{$c->id}}" id="">
                            </form>
                        </div>    
                        @endif                        
                        @endforeach
                     </div>
         
                 </div>
             </div>
         
             {{-- -------------------------------------------- Todo para emprender -------------------------------------------- --}}
             <div class="col-12 d-flex flex-wrap justify-content-end align-items-center">
                 <div class="col-12 d-flex flex-wrap justify-content-end" style="height: auto;">
                     
                     <div class="col-12 d-flex flex-column justify-content-center align-items-center" style="margin: 3rem 0rem 3rem 0rem">
                        <i class="fa-solid fa-pencil mb-3" style="color: #000000; font-size: 2rem"></i>
                         <textarea class="col-12 todo-emprender _text_seccion_global" rows="1" data-id="{{$elements[3]->id}}" data-url="{{route('seccion.textglobalseccion')}}" data-table="elemento" data-campo="texto">{{$elements[3]->texto}}</textarea>
                        <i class="fa-solid fa-pencil mt-3" style="color: #000000; font-size: 2rem"></i>
                         <textarea class="col-12 tarjeta-pasos _text_seccion_global" rows="3" data-id="{{$elements[4]->id}}" data-url="{{route('seccion.textglobalseccion')}}" data-table="elemento" data-campo="texto">{{$elements[4]->texto}}</textarea>
                     </div>

                     <div class="col-12 d-flex flex-column justify-content-center align-items-center mb-3" >
                        <div class="col-auto d-flex flex-wrap justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer">
                            <i class="fa-solid fa-plus" style="font-size: 3rem"></i>
                            <div class="col-12 text-center">Agregar nueva tarjeta</div>
                        </div>
                     </div>
                     
                     <div class="col-12 d-flex flex-wrap">
                        @foreach ($frases as $f)
                        <div class="col-3 ps-5 d-flex flex-column justify-content-center"  style="position: relative; background-color: {{$f->color}};  height: 25rem;">
                            <div class="icono-div d-flex justify-content-center align-items-center">
                                <img src="{{asset('img/home/'.$f->icono)}}" style="height: 100%;" alt="">
                            </div>
                            <div class="titulo-tarjeta">{{$f->titulo}}</div>
                            <div class="col-2" style="height: 3px; border-radius: 23px; background-color: #ffffff"></div>
                            <div class="texto-tarjeta">{{$f->descripcion}}</div>
                            <form action="{{route('seccion.deletetarjeta')}}" method="POST" style="position: absolute; top: 1rem; right: 1rem">
                                @csrf
                                <button style="" class="btn-eliminar">Eliminar tarjeta <i class="fa-solid fa-trash"></i></button>
                                <input type="hidden" name="id_tarjeta" value="{{$f->id}}" id="">
                            </form>
                        </div>
                        

                        @endforeach

                 </div>
                 </div>
             </div>
             {{-- -------------------------------------------- Catalogo exclusivo -------------------------------------------- --}}
         
             <div class="col-12 d-flex flex-row align-items-center justify-content-center my-5" style="height: 10rem; background-color:; position: relative">
                 <div class="todo-emprender">Nuestros catálogos</div>
                 <button class="boton-catalogos">EXCLUSIVOS <img src="{{asset('img/design/Inicio/descargar.png')}}" style="height: 50%;" alt=""></button>
                 <button class="boton-catalogos">ANIMADOS <img src="{{asset('img/design/Inicio/descargar.png')}}" style="height: 50%;" alt=""></button>
                 <div class="col-12 d-flex justify-content-center align-items-center" style="background: rgba(0, 0, 0, 0.311); z-index: 10;  position: 	absolute; top:0; bottom: 0; border-radius: 16px;">
         <p style="color: white; font-size: 2rem; font-weight: bold;">SECCION NO EDITABLE</p>
 </div>
             </div>
         
             {{-- -------------------------------------------- Catalogo exclusivo -------------------------------------------- --}}
         
             <div class="col-12 d-flex justify-content-center align-items-center" style="height: auto">
                 <div class="col-9 d-flex flex-wrap justify-content-center align-items-center" style="height: 40rem;">
                     <div class="col-12 px-1">
                        
                         <div class="" style="height: 95.3%; width: 100%; background-size: cover; background-image: url({{asset('img/home/'.$elem_general[7]->imagen)}})">
                            <form id="form_slider" class="" action="{{route('seccion.cambiarImagen')}}" method="POST" enctype="multipart/form-data">
                                <div class="file-upload col-12 p-0 m-0" style="top: 0; bottom: 0; background: ; height: 100%;">
                                    @csrf
                                    <input id="input_img_element" class="m-0 p-0 up_file_slider" type="file" name="uploadedfile">
                                    <input type="text" value="11" name="id_element" id="" hidden>
                                    <label id="label_form" class="col-12 m-0 p-0 d-flex justify-content-center align-items-center" for="input_img_element" style="opacity: 100%; height: 100%;  border-radius: 16px;">Seleccionar archivo</label>
                                </div>
                            </form>
                            
                            <script>
                                ///////////////////// Editar campos imagen categoria ////////////////////
                                $('#input_img_element').change(function(e) {
                                    $('#label_form').addClass('backr');
                                    $('#label_form').html('Imagen añadida');
                                    $('#form_slider').submit();
                                });
                                ///////////////////// Editar campos imagen categoria ////////////////////
                            </script>
                            
                        </div>
                     </div>
                     <div class="col-auto d-flex flex-wrap justify-content-center align-items-center mt-4 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal3" style="cursor: pointer">
                        <i class="fa-solid fa-plus" style="font-size: 3rem"></i>
                        <div class="col-12 text-center">Agregar nueva imagen al carrousel</div>
                    </div>
                     <div class="col-12 carrucel-catalogo">
                        @foreach ($carrusel as $c)
                        @if ($c->numeroCarrusel == 2)
                        <div class="col-6 mx-1" style="position: relative;; height: 100%; background-size: cover; background-image: url({{asset('img/carrousel/'.$c->imagen)}})">
                            <form action="{{route('seccion.deleteslider')}}" method="POST" style="position: absolute; top: 1rem; right: 1rem">
                                @csrf
                                <button style="" class="btn-eliminar">Eliminar tarjeta <i class="fa-solid fa-trash"></i></button>
                                <input type="hidden" name="idslider" value="{{$c->id}}" id="">
                            </form>
                        </div>
                        @endif
                        @endforeach

                     </div>
                 </div> 
             </div>
         
         {{-- -------------------------------------------- Zona caliente-------------------------------------------- --}}
         
         <div class="col-12 d-flex flex-wrap justify-content-center align-items-center" style="height: 35rem; margin-top: 75rem; background-color: #353352; position: relative; zoom: 70%">
         
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
         <div class="col-12 d-flex flex-row justify-content-center align-items-center" style="zoom: 50%">
             <div class="col-5"></div>
             <div class="col-2 slick-arrows d-flex flex-row justify-content-center align-items-center">
                 <img src="{{asset('img/design/Inicio/flecha.png')}}" class="slick-prev" style="transform: scaleX(-1);" alt="Flecha Izquierda">
                 <img src="{{asset('img/design/Inicio/flecha.png')}}" class="slick-next" style="transform: scaleX(1);" alt="Flecha Derecha">
               </div>
         </div>
         </div>
         <div class="col-12 d-flex justify-content-center align-items-center" style="background: rgba(0, 0, 0, 0.311); z-index: 10;  position: 	absolute; top:-10rem; bottom: 5rem; border-radius: 16px;">
            <p style="color: white; font-size: 2rem; font-weight: bold;">SECCION NO EDITABLE</p>
    </div>
         </div>
         
         {{-- -------------------------------------------- footer targetas-------------------------------------------- --}}
         <div class="col-12 d-flex flex-wrap justify-content-center align-items-center" style="height: 10rem; background-color: #353352; position: relative">
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
             <div class="col-12 d-flex justify-content-center align-items-center" style="background: rgba(0, 0, 0, 0.311); z-index: 10;  position: 	absolute; top:0; bottom: 0; border-radius: 16px;">
                <p style="color: white; font-size: 2rem; font-weight: bold;">SECCION NO EDITABLE</p>
        </div>
         </div>
         
         {{-- -------------------------------------------- CLientes felices -------------------------------------------- --}}
         
         <div class="col-12 d-flex flex-column justify-content-center align-items-center" style="background-color: #353352;">
            <i class="fa-solid fa-pencil mt-5 mb-3" style="color: #ffffff; font-size: 2rem"></i>
             <textarea class="col-5 d-flex justify-content-center align-items-center clientes-titulo _text_seccion_global" rows="6" data-id="{{$elements[6]->id}}" data-url="{{route('seccion.textglobalseccion')}}" data-table="elemento" data-campo="texto">{{$elements[6]->texto}}</textarea>
             <i class="fa-solid fa-pencil mt-5" style="color: #ffffff; font-size: 2rem"></i>
             <textarea class="col-6 d-flex justify-content-center align-items-center clientes-texto _text_seccion_global" rows="4" data-id="{{$elements[7]->id}}" data-url="{{route('seccion.textglobalseccion')}}" data-table="elemento" data-campo="texto">
                 {{$elements[7]->texto}}
             </textarea>
         
         <div class="col-9 d-flex justify-content-center align-items-center" style="height: 23rem; background-color: ; margin-top: 3rem; margin-bottom: 15rem; position: relative">
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
             <div class="col-12 d-flex justify-content-center align-items-center" style="background: rgba(0, 0, 0, 0.311); z-index: 10;  position: 	absolute; top:0; bottom: 0; border-radius: 16px;">
                <p style="color: white; font-size: 2rem; font-weight: bold;">SECCION NO EDITABLE</p>
        </div>
         </div>
         </div>
         
         
         {{-- -------------------------------------------- Venta Segura (Socios) -------------------------------------------- --}}
         <div class="col-12 d-flex flex-row justify-content-center align-items-center" style="height: 30rem;">
         <div class="col-5 d-flex flex-column justify-content-center align-items-center" style="height: 100%; background-color:">
            <i class="fa-solid fa-pencil mb-3" style="color: #000000; font-size: 2rem"></i>
             <textarea class="col-10 venta-segura-titulo _text_seccion_global" rows="3" data-id="{{$elements[8]->id}}" data-url="{{route('seccion.textglobalseccion')}}" data-table="elemento" data-campo="texto">{{$elements[8]->texto}}
             </textarea>
             <i class="fa-solid fa-pencil mt-3" style="color: #000000; font-size: 2rem"></i>
             <textarea class="col-10 venta-segura-desc _text_seccion_global" rows="5" data-id="{{$elements[9]->id}}" data-url="{{route('seccion.textglobalseccion')}}" data-table="elemento" data-campo="texto">{{$elements[9]->texto}}
             </textarea>
         </div>
         <div class="col-6 d-flex flex-row" style="height: 90%; position:relative">
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
             <div class="col-12 d-flex justify-content-center align-items-center" style="background: rgba(0, 0, 0, 0.311); z-index: 10;  position: 	absolute; top:0; bottom: 0; border-radius: 16px;">
                <p style="color: white; font-size: 2rem; font-weight: bold;">SECCION NO EDITABLE</p>
        </div>
         </div>
         </div>
         
         
         
             {{-- -------------------------------------------- Menu modal -------------------------------------------- --}}
             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <form action="{{route('seccion.guardarTarjeta')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar una uneva tarjeta</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="col-12 d-flex flex-row justify-content-center align-items-center my-3">
                        <label class="col-6" for="titulo-tarjeta">Titulo de la tarjeta:</label>
                        <input class="col-6" type="text" name="titulo" id="titulo-tarjeta">
                      </div>
                      <div class="col-12 d-flex flex-row justify-content-center align-items-center my-3">
                        <label class="col-6" for="icono-tarjeta">Icono de la tarjeta:</label>
                        <input class="col-6" type="file" name="icono" id="icono-tarjeta">
                      </div>
                      <div class="col-12 d-flex flex-row justify-content-center align-items-center my-3">
                        <label class="col-6" for="desc-tarjeta">Descripcion de la tarjeta:</label>
                        <input class="col-6" type="text" name="desc" id="desc-tarjeta">
                      </div>
                      <div class="col-12 d-flex flex-row justify-content-center align-items-center my-3">
                        <label class="col-6" for="color-tarjeta">Color de la tarjeta:</label>
                        <input type="color" id="color-tarjeta" name="color" value="#">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-success">Guardar cambios</button>
                    </div>
                </form>
                  </div>
                </div>
              </div>

        {{-- -------------------------------------------- Menu modal carrousel 1-------------------------------------------- --}}
             <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <form action="{{route('seccion.addcarrousel')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" value="1" name="numero_carrusel" hidden>
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar una uneva tarjeta</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <div class="col-12 d-flex flex-row justify-content-center align-items-center my-3">
                        <label class="col-6" for="icono-tarjeta">Nueva imagen</label>
                        <input class="col-6" type="file" name="carrusel_slider" id="icono-tarjeta">
                      </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-success">Guardar cambios</button>
                    </div>
                </form>
                  </div>
                </div>
              </div>
         
    {{-- -------------------------------------------- Menu modal carrousel 2-------------------------------------------- --}}
             <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <form action="{{route('seccion.addcarrousel')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" value="2" name="numero_carrusel" hidden>
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar una uneva tarjeta</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <div class="col-12 d-flex flex-row justify-content-center align-items-center my-3">
                        <label class="col-6" for="icono-tarjeta">Nueva imagen</label>
                        <input class="col-6" type="file" name="carrusel_slider" id="icono-tarjeta">
                      </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-success">Guardar cambios</button>
                    </div>
                </form>
                  </div>
                </div>
              </div>
         </div>  
    </div>

@endsection

@section('extraJS')
<script>

    		$('.multiple-itemss').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 3
        });

		$('.carrousel-back').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: false
        });

		$('.carrucel-catalogo').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: false,
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


});
</script>

@endsection

