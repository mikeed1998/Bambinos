
{{-- ----------------------------------------------------------------------CSS---------------------------------------------------------------------- --}}
<style>

a {
    text-decoration: none; /* Quitar subrayado de los enlaces */
    color: inherit; /* Heredar el color del texto del elemento padre */
}

  
  @media only screen and (max-width: 1440){

  }

  @media only screen and (max-width: 780px){  
  
  }  

  @media only screen and (max-width: 490px){  
  
  }

</style>

{{-- ----------------------------------------------------------------------HHEADER---------------------------------------------------------------------- --}}

<div class="col-12 d-flex flex-wrap  align-items-center" style="height: 90px; padding: 0px 80px 0px 80px">
  <div class="col-auto justify-content-center align-items-center">
  <a class="" style="font-size: 1.4rem;" href="{{route('login')}}">@if(isset($user)) {{$user->name." ".$user->lastname }} @else LOGIN @endif</a>
  </div>

  {{-- <div class="" style="">
    <i id="menu-toggle" class="fa-solid fa-bars" style="color: #000000; font-size: 1.6rem;"></i>
    <div id="menu" class="">
      <div class="">

    </div>
</div>
  </div> --}}

</div>


{{-- ----------------------------------------------------------------------SCRIPTS---------------------------------------------------------------------- --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $("#menu-toggle").click(function(){
        $("#menu").slideToggle(); // Muestra u oculta el menú al hacer clic en el ícono
    });
});
</script>

