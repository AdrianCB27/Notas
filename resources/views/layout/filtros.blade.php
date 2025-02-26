<form action="{{route('anotations.filtrarFav')}}" method="post">
    @csrf
    <label for="fav">Favoritos</label>
    <select name="fav" id="">
      <option value="">Todos</option>
      <option value="1">Si</option>
      <option value="0">No</option>
    </select>
    <button class="bg-gray-100 rounded p-1" type="submit">Filtrar</button>
  </form>
  
  <form class="ml-5" action="{{route('anotations.filtrarCategoria')}}" method="post">
    @csrf
    <label for="fav">Categoria</label>
    <select name="categoria" id="">
      <option value="">Todas</option>
      <option value="Trabajo">Trabajo</option>
      <option value="Personal">Personal</option>
      <option value="Ideas">Ideas</option>
      <option value="Otros">Otros</option>

    </select>
    <button class="bg-gray-100 rounded p-1" type="submit">Filtrar</button>
  </form>