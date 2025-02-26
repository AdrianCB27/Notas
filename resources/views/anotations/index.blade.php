@extends('layout.layout')
@section('titulo', 'Inicio')
@section('contenido')

<div class="flex justify-center mt-8">
  @include('layout.filtros')
</div>

<div class="flex justify-center flex-grow mx-10 py-10">
  <div class="grid grid-cols-3 flex-col mb-10 gap-4">
    @foreach ($anotations as $anotation)
    <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
      <div class="mx-3 mb-0 border-b border-slate-200 pt-3 pb-2 px-1">
      <span class="text-sm font-medium text-slate-600">l
        Categoría: {{$anotation->categoria}}
      </span>
      </div>
      <div class="p-4">
      <h5 class="mb-2 text-slate-800 text-xl font-semibold">
        <a href="{{route('anotations.show', $anotation->id)}}">{{$anotation->titulo}}</a>
        @if ($anotation->favorito == 0)
      <a href="/anotations/marcarFav/{{$anotation->id}}">☆</a>
    @else
    <a href="/anotations/marcarFav/{{$anotation->id}}">★</a>
  @endif
      </h5>
      <p class="text-slate-600 leading-normal font-light">
        {{$anotation->contenido}}
      </p>
      </div>
      <div class="mx-3 border-t border-slate-200 pb-3 pt-2 px-1 flex justify-between">
      <span class="text-sm text-slate-600 font-medium">
        {{$anotation->fecha}}
      </span>
      <div class="flex space-x-4">
        <span class="text-sm text-slate-600 font-medium"><a href="/anotations/edit/{{$anotation->id}}">✏️</a></span>
        <span class="text-sm text-slate-600 font-medium">
        <form action="{{route('anotations.destroy', $anotation->id)}}" method="post">
          @csrf
          @method('delete')
          <button class="text-sm text-slate-600 font-medium cursor-pointer"
          onclick="return confirm('¿Seguro que quieres eliminar esta anotación?')">❌</button>
        </form>
        </span>
      </div>
      </div>
    </div>
  @endforeach
  </div>
</div>
@endsection