@extends('layouts.app')

@section('title','Home')
@section('content')

<div class="container">
    <div class="col-12 py-3 px-3">
        <h6 class="col-12 text-center">Mis vacantes</h6>
        <div class="col-12 ">

        </div>
    </div>
</div>
@endsection

@section('content2')
    <style>
        .contHorarioslist{
            background: #F5F7FF; border-radius: 16px;
        }
        .botonopacity:hover{
            opacity: 50%;
        }

    </style>
    <div class="container d-flex mt-3 px-0">
        <div class="card px-3" style="width: 100%; height: 500px; border-radius:26px; box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.085);">
            <div class="col-12 my-3">
                <h5 class="col-12 text-center my-auto" style="font-weight: bold;">Lista de aplicacion de vacantes</h5>
            </div>
            
            <div id="conthorarios" class="col-12 " style="height: 85%; overflow: auto; background: #F5F7FF; border-radius: 26px;">
            
                <div class="col-12 px-3 py-3 d-flex flex-column">
                    @forEach($pedido as $p)
                    <div class="container card py-2 px-2 mb-2 d-flex flex-row justify-content-between align-items-center" style="border-radius: 16px; box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.085);">
                        <label class="card col-4 text-center py-2" style="box-shadow: none; background: #F5F7FF; border-radius:13px;">
                            <p class="col-auto my-auto">Num.p: {{$p->uid}}</p>
                        </label>
                        <label class="card col-4 text-center py-2" style="box-shadow: none; background: ; border-radius:13px;">
                            <p class="col-auto my-auto">{{ json_decode($p->data)->nombre }}</p>
                        </label>
                        <label class="card col-4 py-2 d-flex flex-wrap justify-content-end" style="box-shadow: none;  border-radius:13px;">
                            <div class="col-auto d-flex flex-wrap justify-content-end" style=" ">
                                <style>
								.cancelado {color: red; cursor: pointer;}
								.recibido { color: #FFCA2C; cursor: pointer;} /* Amarillo */
								.aceptado { color: #28a745; cursor: pointer;} /* Verde */
								.enviado { color: #007bff; cursor: pointer;} /* Azul */
								.finalizado { color: #17a2b8; cursor: pointer;} /* Cyan */
                                </style>
                                 @switch($p->estatus)
                                 @case(0)
                                     <i data-bs-toggle="collapse" data-bs-target="#collapseExample{{$p->id}}" aria-expanded="false" aria-controls="collapseExample" class="fa-solid fa-circle ms-3 my-auto cancelado"></i>
                                 <p class="col-auto my-auto ms-2" style="font-size:12px;">Cancelado</p>
                                 @break
 
                                 @case(1)
                                 <i  data-bs-toggle="collapse" data-bs-target="#collapseExample{{$p->id}}" aria-expanded="false" aria-controls="collapseExample" class="fa-solid fa-circle ms-3 my-auto recibido"></i>
                                     <p class="col-auto my-auto ms-2" style="font-size:12px;">Recibido</p>
                                     @break
 
                                 @case(2)
                                 <i  data-bs-toggle="collapse" data-bs-target="#collapseExample{{$p->id}}" aria-expanded="false" aria-controls="collapseExample" class="fa-solid fa-circle ms-3 my-auto aceptado"></i>
                                     <p class="col-auto my-auto ms-2" style="font-size:12px;">En revisioin</p>
                                     @break
 
                                 @case(3)
                                 <i  data-bs-toggle="collapse" data-bs-target="#collapseExample{{$p->id}}" aria-expanded="false" aria-controls="collapseExample" class="fa-solid fa-circle ms-3 my-auto enviado"></i>
                                     <p class="col-auto my-auto ms-2" style="font-size:12px;">Proceso de contacto</p>
                                     @break
 
                                 @case(4)
                                 <i  data-bs-toggle="collapse" data-bs-target="#collapseExample{{$p->id}}" aria-expanded="false" aria-controls="collapseExample" class="fa-solid fa-circle ms-3 my-auto finalizado"></i>
                                     <p class="col-auto my-auto ms-2" style="font-size:12px;">Finalizado</p>
                                     @break
 
 
                                 @default
                                 <i  data-bs-toggle="collapse" data-bs-target="#collapseExample{{$p->id}}" aria-expanded="false" aria-controls="collapseExample" class="fa-solid fa-circle ms-3 my-auto" style="cursor: pointer;"></i>
                                     <p class="col-auto my-auto ms-2" style="font-size:12px;">Caso no reconocido</p>
                             @endswitch 

                            </div>
                        </label>
                    </div>
                    @endforeach
                </div>
            
            

            
        </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
	  <div class="modal-content" style="border-radius:26px;">
		<div class="modal-header">
		  <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div id="modal_body" class="modal-body">
			
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
		  {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
		</div>
	  </div>
	</div>
  </div>
		
	</div>

<script>
    	function verPediso(id){
		console.log(id);
		var csrf = $('meta[name="csrf-token"]').attr('content');
		var URL = "{{route('detallesPUu')}}";
		$.ajax({
			method: "POST",
			url: URL,
			data: {
				"_method": 'post',
				"_token": csrf,
				id: id
			}
		})
		.done(function(msg) {
			if (msg.success) {
				console.log(msg.mensaje);
				$('#modal_body').html(msg.mensaje)
			}else{
				toastr["error"]('no se encontro informacion del usuario');
                $('#modal_body').html('')
			}
		});
		}	
</script>
@endsection
