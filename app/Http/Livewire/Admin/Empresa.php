<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Configuracion;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Empresa extends Component
{
    use WithFileUploads;

    public $favicon;
    public $logo_admin;
    public $logo_frontend;
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

    public function updated($rules)
    {
        $this->validateOnly($rules);
    }

    public function Empresa(){
        $this->validate();
    }

    public function favicon(){
        $this->validate([
            'favicon' => 'image|max:1024',
        ]);
        $this->favicon->storePubliclyAs('img', 'favicon.png');
    }

    public function logo_admin(){
        $this->validate([
            'logo_admin' => 'image|max:1024',
        ]);
        $this->logo_admin->storeAs('public', 'logo_admin.png');
    }

    public function logo_frontend(){
        $this->validate([
            'logo_frontend' => 'image|max:1024',
        ]);
        $this->logo_frontend->move(public_path('logos'), 'logo_frontend.png');
    }

    public function mount(){
        $this->con=Configuracion::First();
    }

    public function render()
    {
        return view('livewire.admin.empresa');
    }
}
