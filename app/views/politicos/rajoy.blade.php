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
<h1>Mariano Rajoy</h1>


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
  <img onmouseover="this.src='/imagenes/rajoy2.jpg'; document.getElementById('neonclip').play() "onmouseout="this.src='/imagenes/rajoy.jpg'; document.getElementById('neonclip2').play()" src='/imagenes/rajoy.jpg' width="228px" height="293px">
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
var dadas = '0';
function iniciarcontador(){
    var nombre = 'rajoy';
    var dataString = 'nombre='+nombre;
      $.ajax({
          type: "POST",
          dataType: 'json',
          url: "/iniciarcontador",
          data: dataString,
          success: function(data) {
          //console.log("Llega aquí :O");  Sirve para depurar
           console.log(dadas);
                if(dadas==0){
                $('#value').text("Ya le han dado: " + data.bofetadas + " bofetadas");
                dadas=data.bofetadas;
                }else{
                var nuevas=data.bofetadas;
                var relacion = (nuevas-dadas)%10;
                for(var i=0; i<=8; i++){
                $('#value').text("Ya le han dado: " + dadas+relacion + " bofetadas");
                sleep(1000);
                }
                $('#value').text("Ya le han dado: " + nuevas + " bofetadas");
                }
          }
      },"json");
      }
      setInterval(iniciarcontador, 10000); // para ejecutarse cada 10 segundos

 });
</script>

<?
echo "<INPUT TYPE='hidden' NAME='dato' id='dato' SIZE=2 MAXLENGTH=10>";
?>
<br>
</div>
@stop