<?php

namespace App\Http\Controllers;

use App\Models\Anotation;
use Illuminate\Http\Request;

class AnotationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anotations=Anotation::orderByDesc('fecha')->get();
        return view('anotations.index', ['anotations'=>$anotations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anotations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "titulo"=>"required|string|min:3",
            "contenido"=>"required|string|min:3",
            "categoria"=>"required",
            "fecha"=>"required|date"

        ],[
            "titulo.required"=>"El titulo es obligatorio",
            "titulo.min"=>"El titulo debe tener al menos 3 caracteres",
            "contenido.required"=>"El contenido es obligatorio",
            "contenido.min"=>"El contenido debe tener al menos 3 caracteres",
            "categoria.required"=>"La categoria es obligatoria",
            "fecha.required"=>"La fecha es obligatoria",
            "fecha.date"=>"La fecha debe ser una fecha válida"
        ]);

        $anotation = new Anotation();
        $anotation->titulo = $request->titulo;
        $anotation->contenido = $request->contenido;
        $anotation->categoria = $request->categoria;
        $anotation->fecha = $request->fecha;
        $anotation->favorito=0;
        $anotation->save();
        return redirect()->route('anotations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $anotation=Anotation::find($id);
        return view('anotations.show',compact('anotation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $anotation=Anotation::find($id);
        return view('anotations.edit',compact('anotation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            "titulo"=>"required|string|min:3",
            "contenido"=>"required|string|min:3",
            "categoria"=>"required",
            "fecha"=>"required|date"

        ],[
            "titulo.required"=>"El titulo es obligatorio",
            "titulo.min"=>"El titulo debe tener al menos 3 caracteres",
            "contenido.required"=>"El contenido es obligatorio",
            "contenido.min"=>"El contenido debe tener al menos 3 caracteres",
            "categoria.required"=>"La categoria es obligatoria",
            "fecha.required"=>"La fecha es obligatoria",
            "fecha.date"=>"La fecha debe ser una fecha válida"
        ]);
        $anotation=Anotation::find($id);
        $anotation->titulo=$request->titulo;
        $anotation->contenido=$request->contenido;
        $anotation->categoria=$request->categoria;
        $anotation->fecha=$request->fecha;
        $anotation->save();
        return redirect()->route('anotations.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( int $id)
    {
        $anotation=Anotation::find($id);
        $anotation->delete();
        return redirect()->route('anotations.index');
    }
    public function marcarFav($id){
        $anotation=Anotation::find($id);
        if ($anotation->favorito==0) {
            $anotation->favorito=1;
        }else $anotation->favorito=0;
        $anotation->save();
        $anotations=Anotation::all();
return view('anotations.index',compact('anotations'));
    }
    public function filtrarFav(Request $request)
    {
        if ($request->fav != "") {
            $anotations = Anotation::where('favorito', $request->fav)->get();
        } else {
            $anotations = Anotation::all();
        }
        return view('anotations.index', ['anotations' => $anotations]);
    }
    public function filtrarCategoria(Request $request)
    {
        if ($request->categoria != "") {
            $anotations = Anotation::where('categoria', $request->categoria)->get();
        } else {
            $anotations = Anotation::all();
        }
        return view('anotations.index', ['anotations' => $anotations]);
    }
}
