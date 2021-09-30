<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Miembro;

class MiembrosFront extends Component
{
    public function render()
    {
        $Miembros=Miembro::where('estado', 'Activo')->take(3)->get();
        return view('livewire.front.miembros-front',compact('Miembros'));
    }
}
