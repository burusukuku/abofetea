@extends('layouts.bootstrap')

@section('contenido')
<style>
  div.out {
    width: 40%;
    height: 293px;
    background-color: #d6edfc;
  }
  div.in {
       width: 228px;
        height: 293px;
        border: 3px solid black;
        margin:  auto;
  }
  p {
    line-height: 1em;
    margin: 0;
    padding: 0;
  }
.contenedor{
   cursor: url('../../imagenes/hand.png')64 64, auto;
}
</style>
<div class="contenedor">
<h1>@yield('titulo')</h1>


<span id="value"></span><br>
<span id="texto">Abofetealo!!</span>

<audio preload id="neonclip">
  <source src="/sonidos/plash.mp3" type="audio/mpeg">
</audio>
<audio preload id="neonclip2">
  <source src="/sonidos/quejio.mp3" type="audio/mpeg">
</audio>

<div aling="center" class="in enterleave">
  <div class="out">
  @yield('imagen')
  </div>
</div>

<script>
var n = 0;
$( "div.enterleave" )
  .mouseenter(function() {
    n += 1;
    $( "#texto" ).text( "ZAS!!" );
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/bofetada",
            @yield('nombre')
            success: function(data) {
              //console.log("Llega aquí :O");  Sirve para depurar
                  $('#value').text("Ya le han dado: " + data.bofetadas + " bofetadas");
              }
        },"json");

  })
  .mouseleave(function() {
    $( "#texto" ).text( "Llevas " + n + " Bofetadas" );
    //document.getElementById("dato").value=n;
  });

$(document).ready(function() {
iniciarcontador();
function iniciarcontador(){

      $.ajax({
          type: "POST",
          dataType: 'json',
          url: "/iniciarcontador",
          @yield('nombre')
          success: function(data) {
          //console.log("Llega aquí :O");  Sirve para depurar
                $('#value').text("Ya le han dado: " + data.bofetadas + " bofetadas");

          }
      },"json");
      }
      setInterval(iniciarcontador, 10000); // para ejecutarse cada 10 segundos

 });
</script>
<br>
</div>
@stop