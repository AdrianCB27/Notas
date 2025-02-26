@extends('layout.layout')
@section('titulo', "Crear una anotación")
@section('contenido')
<div class="flex justify-center flex-grow mx-10 py-10">
<div class="relative flex flex-col rounded-xl bg-gray-100 p-3">
    <h4 class="block text-xl font-medium text-slate-800 text-center">
        Crear anotación
    </h4>
    <form action="{{route('anotations.store')}}" method="post" class="mt-5 mb-2 w-80 max-w-screen-lg sm:w-96">
        @csrf
        <div class="mb-1 flex flex-col gap-6">
            <div class="w-full max-w-sm min-w-[200px]">
                <label class="block mb-2 text-sm text-slate-600">
                    Título
                </label>
                <input type="text" name="titulo" value="{{old('titulo')}}"
                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                    placeholder="Lista de la compra..." />
                    @error('titulo')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
            </div>
            <div class="w-full max-w-sm min-w-[200px]">
                <label class="block mb-2 text-sm text-slate-600">
                    Contenido
                </label>
                <textarea name="contenido"
                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                    placeholder="Huevos, Manzanas, Pan...">{{old('contenido')}}</textarea>
                    @error('contenido')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div class="w-full max-w-sm min-w-[200px]">
                <label class="block mb-2 text-sm text-slate-600">
                    Categoría
                </label>
                <select name="categoria" id="categoria" value="{{old('categoria')}}
                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow">
                    <option value="">Selecciona una opción</option>
                    <option value="Trabajo">Trabajo</option>
                    <option value="Personal">Personal</option>
                    <option value="Ideas">Ideas</option>
                    <option value="Otros">Otros</option>
                </select>
                @error('categoria')
                <p class="text-red-500 text-sm">{{$message}}</p>
            @enderror
            </div>
            <div class="w-full max-w-sm min-w-[200px]">
                <label class="block mb-2 text-sm text-slate-600">
                    Fecha
                </label>
                <input type="date" name="fecha" value="{{old('fecha')}}
                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                    placeholder="Your Password" />
                    @error('fecha')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>
        </div>
        <button
            class="mt-4 w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="submit">
            Añadir anotación
        </button>
    </form>
</div>
</div>
@endsection