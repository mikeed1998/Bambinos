@extends('layouts.admin')

@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/dropify.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
@endsection
@section('jsLibExtras')
@endsection

@section('content')

<div class="row mb-4 px-2">
	<a href="{{ route('config.seccion.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto" style="border-radius: 16px;"><i class="fa fa-reply"></i> Regresar</a>
</div>

<div class="col-12 my-3">
	<h5 class="col-12 text-center my-auto" style="font-weight: bold;">Lista de Pedidos</h5>
</div>
		
		<div id="conthorarios" class="col-12 " style="min-height: 700px; overflow: auto; background: #F5F7FF; border-radius: 26px;">
		
			<div class="col-12 px-0 py-3 d-flex flex-column">
				@forEach($pedido as $p)
				<div class="col-12 card py-2 px-2 mb-2 d-flex flex-row justify-content-between align-items-center" style="border-radius: 16px; box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.085);">
					<label class="card col-3 text-start py-2 my-0" style="box-shadow: none; background: #F5F7FF; border-radius:13px;">
						<p class="col-auto my-auto">Num p :  {{$p->uid}}</p>
					</label>
					<label class="card col-3 text-start py-2 my-0" style="box-shadow: none; border:none; background: ; border-radius:13px;">
						<p class="col-auto my-auto">Cliente : {{$p->nom_user}}</p>
					</label>
					<label class="card col-3 text-start py-2 my-0" style="box-shadow: none; border:none; background: ; border-radius:13px;">
						<p class="col-auto my-auto">{{ json_decode($p->data)->nombre }}</p>
					</label>
					<label class="card col-3 py-2 my-0 d-flex flex-wrap justify-content-end" style="box-shadow: none;  border-radius:13px; border:none;">
						<div class="col-auto d-flex flex-wrap justify-content-end" style=" ">
							<style>
								.cancelado {color: red; cursor: pointer;}
								.recibido { color: #FFCA2C; cursor: pointer;} /* Amarillo */
								.aceptado { color: #28a745; cursor: pointer;} /* Verde */
								.enviado { color: #007bff; cursor: pointer;} /* Azul */
								.finalizado { color: #17a2b8; cursor: pointer;} /* Cyan */
							</style>
							
							{{-- <a style="color: black;"><i class="fa-solid fa-user-pen"></i> </a> --}}
							<a style="color: black;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="verPediso({{$p->id}})"><i class="fa-solid fa-eye ms-3" ></i></a>
							{{-- <a style="color: black;"><i class="fa-solid fa-circle ms-3 revision" style=";"></i> </a> --}}
							{{-- <i class="fa-solid fa-circle mx-3 ms-4" style="color:#FFCA2C;"></i> --}}
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
                                    <p class="col-auto my-auto ms-2" style="font-size:12px;">En revision</p>
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

				<div class="collapse col-12 mb-3 flex-wrap" id="collapseExample{{$p->id}}">
				<div class="col-12 d-flex justify-content-end">
					<div class="card card-body col-12 d-flex flex-wrap justify-content-end mb-3" style="border-end-start-radius: 16px; border-end-end-radius: 16px; box-shadow: none;">
					<div class="col-12 d-flex flex-wrap justify-content-end">
						<div class="col-12 mb-3" style="align-content: center; text-align: center; font-weight: bold">Seleccione el nuevo estado del pedido</div>
						<form action="{{route('pedidios.changeStatus')}}" method="POST" class="col-4 d-flex flex-wrap justify-content-end" style="background-color: ; padding-right: 130px">
							@csrf
							<input type="text" name="id" value="{{$p->id}}" hidden id="">
							<input type="text" name="estatus" value="0" hidden>
						<p class="col-auto my-auto ms-2" style="font-size:1rem;">Cancelado</p>
						<button type="submit" style="border: none; background-color: transparent"><i class="fa-solid fa-circle ms-3 my-auto cancelado"></i></button>
					</form>
					<form action="{{route('pedidios.changeStatus')}}" method="POST" class="col-4 d-flex flex-wrap justify-content-end" style="background-color: ; padding-right: 130px">
						@csrf
						<input type="text" name="id" value="{{$p->id}}" hidden id="">
						<input type="text" name="estatus" value="1" hidden>						
						<p class="col-auto my-auto ms-2" style="font-size:1rem;">Recibido</p>
							<button type="submit" style="border: none; background-color: transparent"><i class="fa-solid fa-circle ms-3 my-auto recibido"></i></button>
						</form>
							<form action="{{route('pedidios.changeStatus')}}" method="POST" class="col-4 d-flex flex-wrap justify-content-end" style="background-color: ; padding-right: 120px">
								@csrf
								<input type="text" name="id" value="{{$p->id}}" hidden id="">
								<input type="text" name="estatus" value="2" hidden>
							<p class="col-auto my-auto ms-2" style="font-size:1rem;">En revision</p>
							<button type="submit" style="border: none; background-color: transparent"><i class="fa-solid fa-circle ms-3 my-auto aceptado"></i></button>
						</form>
							<form action="{{route('pedidios.changeStatus')}}" method="POST" class="col-4 d-flex flex-wrap justify-content-end" style="background-color: ; padding-right: 130px">
								@csrf
								<input type="text" name="id" value="{{$p->id}}" hidden id="">
								<input type="text" name="estatus" value="3" hidden>
							<p class="col-auto my-auto ms-2" style="font-size:1rem;">Proceso de contacto</p>
							<button type="submit" style="border: none; background-color: transparent"><i class="fa-solid fa-circle ms-3 my-auto enviado"></i></button>
						</form>
							<form action="{{route('pedidios.changeStatus')}}" method="POST" class="col-4 d-flex flex-wrap justify-content-end" style="background-color: ; padding-right: 130px">
								@csrf
								<input type="text" name="id" value="{{$p->id}}" hidden id="">
								<input type="text" name="estatus" value="4" hidden>
							<p class="col-auto my-auto ms-2" style="font-size:1rem;">Finalizado</p>
							<button type="submit" style="border: none; background-color: transparent"><i class="fa-solid fa-circle ms-3 my-auto finalizado"></i></button>
						</form>
							<form action="{{route('pedidios.changeStatus')}}" method="POST" class="col-4 d-flex flex-wrap justify-content-end" style="background-color: ; padding-right: 120px">
								@csrf
								<input type="text" name="id" value="{{$p->id}}" hidden id="">
								<input type="text" name="estatus" value="5" hidden>
							<p class="col-auto my-auto ms-2" style="font-size:1rem;">Caso no reconocido</p>
							<button type="submit" style="border: none; background-color: transparent"><i class="fa-solid fa-circle ms-3 my-auto"></i></button>
						</form>
					</div>
					</div>
				</div>
				  </div>

				@endforeach
			</div>
		
		
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
	  <div class="modal-content" style="border-radius:16px;">
		<div id="modal_body" class="modal-body">
		</div>
		</div>

	  </div>
	</div>
  </div>
		
	</div>

	<div class="col-12 mt-5 d-flex justify-content-center align-items-center">
		{{$pedido->links()}}
	</div>

@endsection
@section('jsLibExtras2')
<script src="{{asset('js/dropify.js')}}" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
@endsection
@section('jqueryExtra')
	<script type="text/javascript">
		function verPediso(id){
		console.log(id);
		var csrf = $('meta[name="csrf-token"]').attr('content');
		var URL = "{{route('detallesPU')}}";
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
				$('#modal_body').html(msg.mensaje);
				$('#envios').html(msg.envio);
			}else{
				toastr["error"]('no se encontro informacion del usuario');
			}
		});
		}	
	</script>
@endsection
