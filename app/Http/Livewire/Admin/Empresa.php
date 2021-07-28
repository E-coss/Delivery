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
    public $mensaje;
    public $caption;
    public $error;

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
        if($this->favicon->storeAs('resources', 'favicon.png')){
            $this->mensaje=true;
            $this->caption="Favicon Actualizado correctamente";
        }else{
            $this->error=true;
            $this->caption="Vuelva a intentarlo mas tarde";
        }
    }

    public function logo_admin(){
        $this->validate([
            'logo_admin' => 'image|max:1024',
        ]);
        if($this->logo_admin->storeAs('resources', 'logo_admin.png')){
            $this->mensaje=true;
            $this->caption="Logo Administrativo Actualizado";
        }else{
            $this->error=true;
            $this->caption="Vuelva a intentarlo mas tarde";
        }
    }

    public function logo_frontend(){
        $this->validate([
            'logo_frontend' => 'image|max:1024',
        ]);
        if($this->logo_frontend->storeAs('resources', 'logo_frontend.png')){
            $this->mensaje=true;
            $this->caption="Logo Frontend Actualizado correctamente";   
        }else{
            $this->error=true;
            $this->caption="Vuelva a intentarlo mas tarde";
        }
    }

    public function alert(){
        $this->mensaje=false;
    }

    public function mount(){
        $this->con=Configuracion::First();
        $this->mensaje=false;
        $this->error=false;
    }

    public function render()
    {
        return view('livewire.admin.empresa');
    }
}
