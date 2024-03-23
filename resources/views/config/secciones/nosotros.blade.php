@extends('layouts.admin')

@section('extraCSS')
    <style>
        .titulo-nosotros{
            color: #ffffff;
            font-family: gotan4;
            font-size: 4rem;
            display: flex;
            text-align: center;
        }

        .texto-nosotros{
            color: #ffffff;
            font-family: gotan4;
            font-size: 2rem;
            text-align: center;
            margin-top: 3rem;
        }

        .subtexto-nosotros{
            color: #ffffff;
            font-family: tommy2;
            font-size: 1.2rem;
            margin-top: 3rem;
            text-align: center;
            text-wrap: balance;
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
            font-size: 1.1rem;
        }

        .titulo-cal{
            font-family: gotan4;
            color: #353352;
            font-size: 3rem;
            text-align: center;
            text-wrap: balance;
        }

        .desc-cal{
            color: #353352;
            font-family: tommy2;
            font-size: 1rem;
            text-align: center;
            margin-top: 3rem;
            margin-bottom: 5rem;
            text-wrap: balance;
        }

        .slick-arrows {
            position: relative;
            margin-top: 2rem; /* Ajusta el margen superior según sea necesario */
            text-align: center; /* Centra las flechas horizontalmente */

        }


        .slick-prev,
        .slick-next {
            width: 4rem;; /* Ancho de las flechas */
            height: 4rem;; /* Altura de las flechas */
            cursor: pointer; /* Cambia el cursor al pasar sobre las flechas */
            margin: 0rem 6rem 0rem 6rem;
        }

        body { background-color: #e5e8eb  !important; }

        .card-header { background-color: #b0c1d1  !important; }

        .black-skin
        .btn-primary { background-color: #b0c1d1  !important; }

        .btn {
            box-shadow: none;
            border-radius: 15px;
        }

        ._text_seccion_global{
            border-radius: 23px;
            padding: 1rem 0rem 1rem 0rem;
            background-color: transparent;
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
    </style>
@endsection

@section('content')

    <div class="row mt-5 mb-4 px-2">
        <a href="{{ route('front.admin') }}" class="mt-5 col col-md-2 btn btn-sm btn-dark mr-auto"><i class="fa fa-reply"></i> Regresar</a>
    </div>
    <div class="col-12 d-flex flex-column justify-content-center align-items-center" style="background-color: #353352; zoom: 70%">
        <div class="col-7 d-flex flex-wrap justify-content-center" style="height: auto; background-color:;">
            <textarea class="col-12 titulo-nosotros _text_seccion_global" rows="2" data-id="{{$elements[1]->id}}" data-url="{{route('seccion.textglobalseccion')}}" data-table="elemento" data-campo="texto">{{$elements[1]->texto}}</textarea>
            <textarea class="col-10 texto-nosotros _text_seccion_global" rows="2" data-id="{{$elements[2]->id}}" data-url="{{route('seccion.textglobalseccion')}}" data-table="elemento" data-campo="texto" style="height: auto;">{{$elements[2]->texto}}</textarea>
            <div class="col-12 d-flex justify-content-center align-items-center" style="height: 7rem; background-color: ; margin-top: 3rem;">
            <img src="{{asset('img/design/Asesores/Bambinos-logo.png')}}" alt="" style="height: 100%; width: auto;">
        </div>
        <textarea class="col-10 subtexto-nosotros _text_seccion_global" rows="4" data-id="{{$elements[4]->id}}" data-url="{{route('seccion.textglobalseccion')}}" data-table="elemento" data-campo="texto">{{$elements[4]->texto}}</textarea>
        </div>
    
        {{-- -------------------------------------------- Recuadro sobre socios -------------------------------------------- --}}
        <div class="col-12 d-flex flex-column justify-content-center align-items-center mt-5" >
            <div class="col-auto d-flex flex-wrap justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#sociomodal" style="cursor: pointer">
                <i class="fa-solid fa-plus" style="font-size: 3rem; color: #ffffff"></i>
                <div class="col-12 text-center" style="color: #ffffff">Agregar nueva tarjeta</div>
            </div>
         </div>
        <div class="col-6 d-flex flex-wrap" style="min-height: 60rem; margin: 3rem 0rem 10rem 0rem">
            @foreach ($socio as $s)
            <div class="col-6 d-flex justify-content-center aling-items-center" style="position: relative">
                <div class="col-6 d-flex flex-column justify-content-center align-items-center" style="height: 100%; background-color: {{$s->color1}}">
                    <div class="col-6 d-flex align-items-end justify-content-center" style="height: 7rem; background-color: #ffffff; border-radius: 100px; position: relative; margin-top: 3rem;">
                        <img style="position: absolute; height: 10rem; width: auto; border-bottom-left-radius: 100px; border-bottom-right-radius: 100px" src="{{asset('img/home/'.$s->imagen)}}" alt="">
                    </div>
                    <div class="col-10 d-flex justify-content-center align-items-center nombre-socio">
                        {{$s->Nombre}}
                    </div>
                    <div class="col-10 d-flex flex-row align-items-end justify-content-center">
                        <div class="col-7 conoceme">
                            Conoceme
                        </div>
                        <div class="col-5 linea-conoceme"></div>
                    </div>
                </div>
                <div class="col-6 d-flex flex-column justify-content-between align-items-center" style="height: 100%; background-color: {{$s->color2}}">
                    <div class="col-10 desc-socio" style="margin-top:3rem">
                        {{$s->Descripcion}}
                    </div>
                    <div class="col-10 d-flex justify-content-end align-items-center" style="height: 1.5rem; background-color:; margin-bottom: 2rem;">
                        <img src="{{asset('img/design/Inicio/whats.png')}}" style="height: 100%; margin-left: 0.5rem;" alt="">
                        <img src="{{asset('img/design/Inicio/insta.png')}}" style="height: 100%; margin-left: 0.5rem;" alt="">
                        <img src="{{asset('img/design/Inicio/face.png')}}" style="height: 100%; margin-left: 0.5rem;" alt="">
                    </div>
                </div>
                <form action="{{route('seccion.deletesocio')}}" method="POST" style="position: absolute; top: 1rem; right: 1rem">
                    @csrf
                    <button style="" class="btn-eliminar">Eliminar tarjeta <i class="fa-solid fa-trash"></i></button>
                    <input type="hidden" name="id_socio" value="{{$s->id}}" id="">
                </form>
            </div>
            @endforeach

        </div>
    </div>
    
    {{-- -------------------------------------------- Ccarrousel -------------------------------------------- --}}
    
    <div class="col-12 d-flex flex-column " style="height: auto; background-color: #ffffff; zoom:70%">
        <div class="col-12 d-flex flex-row justify-content-end align-items-center">
            <div class="col-2" style="height: 1.2rem; background-color: #E04525;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #E37A30;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #69319F;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #4BA363;"></div>
        </div>
    
        <div class="col-12 d-flex flex-column justify-content-center align-items-center" style="margin-bottom: 5rem;">
            <div class="col-auto d-flex flex-wrap justify-content-center align-items-center mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal4" style="cursor: pointer">
                <i class="fa-solid fa-plus" style="font-size: 3rem"></i>
                <div class="col-12 text-center">Agregar nueva imagen al carrousel</div>
            </div>
            <div class="col-9 carrusel-nosotros" style="height: 40rem; background-color: ; margin-top: 2rem">
                @foreach ($carrusel as $c)
                @if ($c->numeroCarrusel == 3)
                <div class="col-3 px-1" style="">
                <div class="col-12" style="position: relative; height: 100%; background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url({{asset('img/carrousel/'.$c->imagen)}})">
                    <form action="{{route('seccion.deleteslider')}}" method="POST" style="position: absolute; top: 1rem; right: 1rem">
                        @csrf
                        <button style="" class="btn-eliminar">Eliminar tarjeta <i class="fa-solid fa-trash"></i></button>
                        <input type="hidden" name="idslider" value="{{$c->id}}" id="">
                    </form>
                </div>
                </div>
                @endif
                @endforeach
            </div>

        </div>
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
            <div class="col-8 d-flex flex-column" style="margin-top: 2rem">
                <textarea class="col-12 d-flex justify-content-center align-items-center titulo-cal _text_seccion_global" rows="2" data-id="{{$elements[5]->id}}" data-url="{{route('seccion.textglobalseccion')}}" data-table="elemento" data-campo="texto">{{$elements[5]->texto}}</textarea>
                <textarea class="col-12 d-flex justify-content-center align-items-center desc-cal _text_seccion_global" rows="3" data-id="{{$elements[6]->id}}" data-url="{{route('seccion.textglobalseccion')}}" data-table="elemento" data-campo="texto">{{$elements[6]->texto}}</textarea>
            </div>
    
        </div>
        
    
    
        <div class="col-12 d-flex flex-row justify-content-start align-items-center">
            <div class="col-2" style="height: 1.2rem; background-color: #E04525;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #E37A30;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #69319F;"></div>
            <div class="col-2" style="height: 1.2rem; background-color: #4BA363;"></div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form action="{{route('seccion.addcarrousel')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" value="3" name="numero_carrusel" hidden>
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

                   {{-- -------------------------------------------- Menu modal -------------------------------------------- --}}
                   <div class="modal fade" id="sociomodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <form action="{{route('seccion.guardarSocio')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar una nuevo Socio</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="col-12 d-flex flex-row justify-content-center align-items-center my-3">
                            <label class="col-6" for="titulo-tarjeta">Nombre del Socio:</label>
                            <input class="col-6" type="text" name="nombre" id="titulo-tarjeta">
                          </div>
                          <div class="col-12 d-flex flex-row justify-content-center align-items-center my-3">
                            <label class="col-6" for="icono-tarjeta">Imagen del Socio:</label>
                            <input class="col-6" type="file" name="imagen" id="icono-tarjeta">
                          </div>
                          <div class="col-12 d-flex flex-row justify-content-center align-items-center my-3">
                            <label class="col-6" for="desc-tarjeta">Descripcion del socio:</label>
                            <input class="col-6" type="text" name="desc" id="desc-tarjeta">
                          </div>
                          <div class="col-12 d-flex flex-row justify-content-center align-items-center my-3">
                            <label class="col-6" for="color-tarjeta">Color 1 del Socio:</label>
                            <input type="color" id="color-tarjeta" name="color1" value="#">
                          </div>
                          <div class="col-12 d-flex flex-row justify-content-center align-items-center my-3">
                            <label class="col-6" for="color-tarjeta">Color 2 del Socio:</label>
                            <input type="color" id="color-tarjeta" name="color2" value="#">
                          </div>
                          <div class="col-12 d-flex flex-row justify-content-center align-items-center my-3">
                            <label class="col-6" for="desc-tarjeta">Link de Whatsapp</label>
                            <input class="col-6" type="text" name="whats" id="desc-tarjeta">
                          </div>
                          <div class="col-12 d-flex flex-row justify-content-center align-items-center my-3">
                            <label class="col-6" for="desc-tarjeta">Link de Instagram</label>
                            <input class="col-6" type="text" name="insta" id="desc-tarjeta">
                          </div>
                          <div class="col-12 d-flex flex-row justify-content-center align-items-center my-3">
                            <label class="col-6" for="desc-tarjeta">Link de Faceboock</label>
                            <input class="col-6" type="text" name="face" id="desc-tarjeta">
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
@endsection

@section('extraJS')
<script>
            $(document).ready(function() {
             $('.carrusel-nosotros').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 2,
                dots: false,
                arrows: false,
            });

            $('.slick-prev').click(function() {
                $('.carrusel-nosotros').slick('slickPrev');
            });

            $('.slick-next').click(function() {
                $('.carrusel-nosotros').slick('slickNext');
            });
});
</script>
@endsection

