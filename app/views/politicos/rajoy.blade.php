@extends('layouts.politicos')

@section('titulo')
 Naniano Najoy
@stop

@section('imagen')
<img onmouseover="this.src='/imagenes/rajoy2.jpg';
document.getElementById('neonclip').currentTime = 0;
document.getElementById('neonclip').play() "onmouseout="this.src='/imagenes/rajoy.jpg';
 document.getElementById('neonclip2').currentTime = 0;
document.getElementById('neonclip2').play()" src='/imagenes/rajoy.jpg' width="228px" height="293px">
@stop

@section('nombre')
 data: {nombre: "rajoy"},
@stop