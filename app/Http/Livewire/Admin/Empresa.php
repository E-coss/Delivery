<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Configuracion;
use Illuminate\Support\Facades\Auth;

class Empresa extends Component
{

    public Configuracion $con;

    protected $rules = [
        'con.nombre' => 'required|string|max:50',
        'con.direccion' => 'required|string|max:100',
        'con.eslogan' => 'required|string|max:100',
        'con.email' => 'required|string|email|max:50',
        'con.facebook' => 'required|string|url|max:255',
        'con.instagram' => 'required|string|url|max:255',
        'con.youtube' => 'required|string|url|max:255',
        'con.twitter' => 'required|string|url|max:255',
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
