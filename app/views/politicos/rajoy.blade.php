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


<span>Abofetealo!!</span>
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
    $( "div.contenedor" ).find( "span" ).text( "ZAS!!" );

  })
  .mouseleave(function() {
    $( "div.contenedor" ).find( "span" ).text( "Llevas " + n + " Bofetadas" );
    document.getElementById("dato").value=n;
  });
</script>

<?
echo "<INPUT TYPE='hidden' NAME='dato' id='dato' SIZE=2 MAXLENGTH=10>";
?>
<br>
</div>
@stop