<div class="flex justify-center mt-20 ">
<div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-100">      
    <div class="mx-3 mb-0 border-b border-slate-200 pt-4 pb-3 px-2">
      <span class="text-lg font-medium text-slate-600">
        Categoría: {{$categoria}}
      </span>
    </div>
    <div class="p-6">
      <h5 class="mb-3 text-slate-800 text-2xl font-semibold">
               {{$titulo}}

      </h5>
      <p class="text-slate-600 leading-normal font-light text-lg">
        {{$contenido}}
    </p>
    </div>
    <div class="mx-3 border-t border-slate-200 pb-4 pt-3 px-2 flex justify-between">
      <span class="text-lg text-slate-600 font-medium">
        {{$fecha}}
      </span>
      <span class="text-lg text-slate-600 font-medium">
        <a href="/">Volver</a>
      </span>
      
    </div>
  </div>
</div>