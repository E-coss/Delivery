<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Detalle_telefonos;

class Telefonos extends Component
{

    public $telefono = null;

    public function mount(){
        $this->telefono = null;
    }

    public function render()
    {
        $telefonos=Detalle_telefonos::where('name', 'like', '%'.$this->search.'%')->where('estado', $this->show)->paginate($this->showcant);
        return view('livewire.telefonos');
    }
}
