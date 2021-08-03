<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Nosotros;

class AcercaDeNosotros extends Component
{
    public Nosotros $nos;
    public $mensaje;
    public $caption;
    public $error;

    protected $rules = [
        'nos.descripcion' => 'required|string|min:10',
        'nos.mision' => 'required|string|min:10',
        'nos.vision' => 'required|string|min:10',
        'nos.valores' => 'required|string|min:10',
        'nos.iframe' => 'required|string|min:10',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function Save(){
        $this->validate();
        if($this->nos->save()){
            $this->mensaje=true;
            $this->caption="Información actualizada Correctamente";
        }else{
            $this->mensaje=true;
            $this->error=true;
            $this->caption="No se pudo actualizar la Información";
        }
    }

    public function alert(){
        $this->mensaje=false;
    }

    public function mount(){
        $this->nos=Nosotros::First();
        $this->mensaje=false;
        $this->error=false;
    }

    public function render()
    {
        return view('livewire.admin.acerca-de-nosotros');
    }
}
