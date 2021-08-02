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
    public $nuevo;
    public $telefono_id;
    public $tipo_telefono;
    public $numero;
    public $entidad;
    public $cerrar;
    
    protected $rules = [
        'tipo_telefono' => 'required|max:1|string',
        'telefono' => 'required|max:15|min:10|unique:detalle_telefonos,numero',
    ];

    public function updated($propertyName)
    {
        if(!$this->edit){
            $this->validateOnly($propertyName);
        }
       
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
        if($this->nuevo==false){
        $this->resetInputFields();
        $this->hide=true;
        $this->nuevo=true;
        }else{
            $this->validate();
            $registro = new Detalle_telefonos;
            $registro->tipo_telefono = $this->tipo_telefono;
            $registro->numero = $this->telefono;
            $registro->entidad_id = Auth::User()->id;
            $registro->entidad = "U";
            $registro->creado_por = Auth::User()->id;

            if($registro->save()){
                $this->addError('guardado', 'Numero de telefono agregado correctamente.');
            }else{
                $this->addError('errorguardar', 'No se ha podido agregar su numero de telefono correctamente.');
            }

            $this->resetInputFields();
            $this->hide=false;
            $this->nuevo=false;
            $this->cerrar=true;
        }
    }

    public function update()
    {
        
        $registro = Detalle_telefonos::findOrFail($this->telefono_id);
        if ($registro->numero === $this->telefono) {
            $this->validate([
                'tipo_telefono' => 'required|max:1|string',
                'telefono' => 'required|max:15|min:10',
            ]);

        $registro->tipo_telefono = $this->tipo_telefono;
        $registro->numero = $this->telefono;
        $registro->entidad_id = Auth::User()->id;
        $registro->entidad = "U";
        $registro->creado_por = Auth::User()->id;

        if($registro->save()){
            $this->addError('guardado', 'Numero de telefono actualizado correctamente.');
        }else{
            $this->addError('errorguardar', 'No se ha podido actualizar su numero de telefono correctamente.');
        }
    }else{
        $this->addError('errorguardar', 'Ha ocurrido un error al actualizar su numero de telefono.');
    }
        $this->resetInputFields();
        $this->hide=false;
        $this->edit=false;
        $this->cerrar=true;
    }
    
    public function resetInputFields(){
        $this->telefono_id = '';
        $this->telefono = '';
        $this->tipo_telefono = '';
        $this->numero = '';
        $this->entidad = '';
        $this->hide=false;
        $this->edit=false;
        $this->nuevo=false;
        $this->resetValidation();
    }
    

    public function destroy($id)
    {
        if ($id) {
            $record = Detalle_telefonos::where('id', $id);
            $this->cerrar=true;
            if($record->delete()){
                $this->addError('guardado', 'Numero de telefono eliminado correctamente.');
            }else{
                $this->addError('errorguardar', 'No se ha podido eliminar su numero de telefono correctamente.');
            }
          
        }
    }

    public function close(){
        $this->cerrar=true;
    }

    public function mount(){
        $this->edit=false;
        $this->hide=false;
        $this->nuevo=false;
        $this->cerrar=false;
    }

    public function render()
    {
        $telefonos=Detalle_telefonos::Where('entidad_id',Auth::User()->id)->get();
        return view('livewire.telefonos',compact('telefonos'));
    }
}
