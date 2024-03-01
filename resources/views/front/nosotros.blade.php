@extends('layouts.front')

@section('title', 'Inicio')
{{-- CABECERAS DE ESTILOS --}}
    @section('cssExtras')


    @endsection
{{-- CABECERAS DE ESTILOS --}}

{{-- ESTILOS CSS PERSONALIZADOS --}}
    @section('styleExtras')
    <style>

        .titulo-nosotros{
            color: #ffffff;
            font-family: gotan4;
            font-size: 4rem;
            display: flex;
            text-align: center;
        }

        @media only screen and (max-width: 768px){ 
            
        } 

        @media only screen and (max-width: 590px){  
            
        }

    </style>


    @endsection
{{-- ESTILOS CSS PERSONALIZADOS --}}

{{-- CONTENIDO DE LA PAGINA --}}
    @section('content')
<div class="col-12 d-flex justify-content-center align-items-center" style="background-color: #353352">
    <div class="col-7 d-flex flex-wrap justify-content-center" style="height: 10rem; background-color:;">
        <div class="col-12 titulo-nosotros">¡15 años de experiencia respaldan tu compra!</div>
        <div class="col-10" style="height: 3rem; background-color: red">Todos nuestros asesores comenzarón su aventura en el departamento de rentas de brincolines bambinos</div>
    </div>
</div>
    @endsection
{{-- CONTENIDO DE LA PAGINA --}}

{{-- JAVASCRIPT EXTRAS --}}
    @section('jqueryExtra')
<script>
</script>


    @endsection
{{-- JAVASCRIPT EXTRAS --}}
