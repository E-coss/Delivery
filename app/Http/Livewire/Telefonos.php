<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Detalle_telefonos;
use Illuminate\Support\Facades\Auth;

class Telefonos extends Component
{

    public $telefono;

    public function select($numero){
        $this->telefono = $numero['numero'];
    }

    public function mount(){
        $this->telefono;
    }

    public function render()
    {
        $telefonos=Detalle_telefonos::Where('entidad_id',Auth::User()->id)->get();
        return view('livewire.telefonos',compact('telefonos'));
    }
}
