<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Detalle_telefonos;
use Illuminate\Support\Facades\Auth;

class Telefonos extends Component
{

    public $telefono;
    public $edit;
    public $hide;
    public $telefono_id;
    public $tipo_telefono;
    public $numero;
    public $entidad;
    
    public function edit($numero){
        $this->telefono_id = $numero['id'];
        $this->tipo_telefono = $numero['tipo_telefono'];
        $this->telefono = $numero['numero'];
        $this->entidad = $numero['entidad'];
        $this->hide=true;
        $this->edit=true;
    }

    public function NewTel(){
        $this->resetInputFields();
        $this->hide=true;
    }

    public function resetInputFields(){
        $this->telefono_id = '';
        $this->telefono = '';
        $this->tipo_telefono = '';
        $this->numero = '';
        $this->entidad = '';
        $this->hide=false;
        $this->edit=false;
    }
    
    public function store(){
        $this->validate([
            'tipo_telefono' => 'required',
            'numero' => 'required',
            'entidad' => 'required',
        ]);
        Detalle_telefonos::Create(['id' => $this->telefono_id], [
            'tipo_telefono'=> $this->tipo_telefono,
            'numero'=> $this->numero,
            'entidad_id'=> $this->Auth::User()->id,
            'entidad'=> $this->entidad,
            'creado_por'=> Auth::User()->id
        ]);

        session()->flash('message', $this->post_id ? 'Numero de telefono actualizado correctamente.' : 'Numero de telefono agregado correctamente.');

        $this->closeModal();
        $this->resetInputFields();
    }


    public function mount(){
        $this->edit=false;
        $this->hide=false;
    }

    public function render()
    {
        $telefonos=Detalle_telefonos::Where('entidad_id',Auth::User()->id)->get();
        return view('livewire.telefonos',compact('telefonos'));
    }
}
