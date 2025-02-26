<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class anotation extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $titulo,public string $contenido, public string $categoria, public string $fecha,public bool $favorito)
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.anotation');
    }
}
