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
<h1>Soraya Saenz de Santamaría</h1>

<span>Abofeteala!!</span>

<div aling="center" class="in enterleave">
  <div class="out">
  <img src="/imagenes/soraya.jpg" width="228px" height="293px">
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
    $( "div.contenedor" ).find( "span" ).text( "Llevas " + n + " tortas" );
  });
</script>
<br><br>
</div>
@stop