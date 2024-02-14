@extends('layouts.admin')

@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/dropify.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('jsLibExtras')
@endsection
<style>
	.inp-busc{
		padding: 10px 0px;
		border-radius: 13px;
		border-style: solid;
		border-width: 1.5px;
		border-color: #000000;
	}

	.inp-busc::placeholder{
		color: #000000;
	}

	.btn-perso{
		padding: 10px 20px;
		background-color: transparent;
		border-radius: 13px;
		border-color: #000000;
		transition: 0.2s ease;
		border-style: solid;
		border-width: 1.6px;
	}

	.btn-perso:hover{
		background-color: rgb(0, 0, 0);
		color: rgb(255, 255, 255);
	}
</style>
@section('content')

<div class="row mb-4 px-2">
	<a href="{{ route('config.seccion.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto" style="border-radius: 16px;"><i class="fa fa-reply"></i> Regresar</a>
</div>

<div class="col-12 my-3">
	<h5 class="col-12 text-center my-auto" style="font-weight: bold;">Lista de Productos</h5>
</div>

<form action="{{route('productos.show')}}" method="GET" class="col-12 d-flex flex-wrap justify-content-center mt-4">
	<div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center justify-content-md-end justify-content-lg-end pe-0 pe-md-5 pe-lg-5 buscador-shop" style="">
		<div class="col-8" style="position: relative;">
			<select class="col-12 inp-busc" name="mi_lista" id="mi-lista" style="text-transform: uppercase;">
				<option value="todos_los_productos" selected>TODOS LOS PRODUCTOS</option>
			   @foreach ($categoria as $c)
				   <option value="{{$c->id}}" name="id_catego" style="text-transform: uppercase;">{{$c->nombre}}</option>
			   @endforeach
			</select>
			</div>
	</div>
	<div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center justify-content-md-start justify-content-lg-start ps-0 ps-md-5 ps-lg-5 buscador-shop" style="">
		<div class="col-8" style="position: relative;">
			<input class="col-12 inp-busc" type="" style="" name="busqueda_txt" id="" placeholder="BUSCAR">
			</div>
	</div>

	<div class="col-12 d-flex justify-content-center mt-4">
	   <button class="btn-perso" type="submit">FILTRAR</button>
	</div>
   </form>
		
		<div id="conthorarios" class="col-12 " style="min-height: 700px; overflow: auto; background: #F5F7FF; border-radius: 26px;">			
			<div class="col-12 px-0 py-3 d-flex flex-column">
				@forEach($productos as $p)
				<div class="col-12 card py-2 px-2 mb-2 d-flex flex-row justify-content-between align-items-center" style="border-radius: 16px; box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.085);">
					<label class="card col-3 text-start py-2 my-0" style="box-shadow: none; background: #F5F7FF; border-radius:13px;">
						<p class="col-auto my-auto">Producto : {{$p->nombre}}</p>
					</label>
						@if (!empty($p->cantidad))
						<label class="card col-3 text-start py-2 my-0" style="box-shadow: none; border:none; background: ; border-radius:13px;">
							<p class="col-auto my-auto">Cantidad : {{$p->cantidad}}</p>
						</label>
						@endif
					<label class="card col-3 text-start py-2 my-0" style="box-shadow: none; border:none; background: ; border-radius:13px;">
						<p class="col-auto my-auto">Precio : ${{ number_format($p->precio, 2, '.', ',') }}</p>
					</label>
					<label class="card col-3 py-2 my-0 d-flex flex-wrap justify-content-end" style="box-shadow: none;  border-radius:13px; border:none;">
						<div class="col-auto d-flex flex-wrap justify-content-end" style=" ">
							<style>
								.inctivo {color: red; }
								.activo { color: #28a745; } /* Verde */
							</style>
							
							<a href="{{route('config.seccion.viewProduct',$p->id)}}"  style="color: black;"><i class="fa-solid fa-eye ms-3"></i></a>

							@switch($p->inicio)
								@case(0)
								<a style="color: black;"><i class="fa-solid fa-circle ms-3 inctivo" style=""></i> </a>
									@break
								@case(1)
								<a style="color: black;"><i class="fa-solid fa-circle ms-3 activo" style=""></i> </a>
									@break
								@default
									
							@endswitch
							

						</div>
					</label>
				</div>
				@endforeach
			</div>
		
		

		
	</div>

	{{-- <div class="col-12 mt-5 d-flex justify-content-center align-items-center">
		{{$productos->links()}}
	</div> --}}

@endsection
@section('jsLibExtras2')
<script src="{{asset('js/dropify.js')}}" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

@endsection
@section('jqueryExtra')
	<script type="text/javascript">
	
	</script>
@endsection