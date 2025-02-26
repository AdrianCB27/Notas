@extends('layout.layout')
@section('titulo','Vista detallada')
@section('contenido')
<x-anotation
    :titulo="$anotation->titulo"
    :contenido="$anotation->contenido"
    :categoria="$anotation->categoria"
    :fecha="$anotation->fecha"
    :favorito="$anotation->favorito"
/>
@endsection