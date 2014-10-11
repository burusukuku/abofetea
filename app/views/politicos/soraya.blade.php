@extends('layouts.politicos')

@section('titulo')
 Zoraya
@stop

@section('imagen')
<img onmouseover="this.src='/imagenes/soraya.jpg'; document.getElementById('neonclip').play() "onmouseout="this.src='/imagenes/soraya.jpg'; document.getElementById('neonclip2').play()" src='/imagenes/soraya.jpg' width="228px" height="293px">
@stop

@section('nombre')
 data: {nombre: "soraya"},
@stop