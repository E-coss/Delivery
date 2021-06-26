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
    
    protected $rules = [
        'tipo_telefono' => 'required|max:1|string',
        'telefono' => 'required|max:15|min:10',
        'entidad' => 'required|string|max:1',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function edit($numeros){
        $this->telefono_id = $numeros['id'];
        $this->tipo_telefono = $numeros['tipo_telefono'];
        $this->telefono = $numeros['numero'];
        $this->entidad = $numeros['entidad'];
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
        // $this->validate([
        //     'tipo_telefono' => 'required',
        //     'numero' => 'required',
        //     'entidad' => 'required',
        // ]);
        Detalle_telefonos::Create(['id' => $this->telefono_id], [
            'tipo_telefono'=> $this->tipo_telefono,
            'numero'=> $this->telefono,
            'entidad_id'=> $this->Auth::User()->id,
            'entidad'=> $this->entidad,
            'creado_por'=> Auth::User()->id
        ]);

        session()->flash('message', $this->telefono_id ? 'Numero de telefono actualizado correctamente.' : 'Numero de telefono agregado correctamente.');

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
