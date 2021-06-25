<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Detalle_telefonos;
use Illuminate\Support\Facades\Auth;

class Telefonos extends Component
{

    public Detalle_telefonos $telefonos;
    public $telefono;
    public $edit;
    public $hide;
    public $telefono_id;
    public $tipo_telefono;
    public $numero;
    public $entidad;
    
    protected $rules = [
        'telefonos.tipo_telefono' => 'required|string|min:6',
        'telefonos.numero' => 'required|string|max:500',
        'telefonos.entidad' => 'required|string|max:500',
    ];

    public function select($numero){
        $this->telefono = $numero['numero'];
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
        Detalle_telefonos::create([
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
   
    public function edit($id)
    {
        $record = Detalle_telefonos::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->email = $record->email;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'tipo_telefono' => 'required',
            'numero' => 'required',
            'entidad' => 'required',
        ]);
        if ($this->selected_id) {
            $record = Detalle_telefonos::find($this->selected_id);
            $record->update([
                'tipo_telefono'=> $this->tipo_telefono,
                'numero'=> $this->numero,
                'entidad_id'=> $this->Auth::User()->id,
                'entidad'=> $this->entidad,
                'actualizado_por'=> Auth::User()->id
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = Detalle_telefonos::where('id', $id);
            $record->delete();
        }
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
