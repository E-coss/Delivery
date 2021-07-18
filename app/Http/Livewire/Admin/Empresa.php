<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Configuracion;
use Illuminate\Support\Facades\Auth;

class Empresa extends Component
{

    public Configuracion $con;

    protected $rules = [
        'con.nombre' => 'required|string|min:6|max:50',
        'con.direccion' => 'required|string|max:500',
        'con.eslogan' => 'required|string|max:500',
        'con.email' => 'required|string|max:500',
    ];

    public function Empresa(){
        $this->validate();
    }

    public function mount(){
        $this->con=Configuracion::First();
    }

    public function render()
    {
        return view('livewire.admin.empresa');
    }
}
