<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Miembro;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Miembros extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $showcant = null;
    public $show;
    public $temporal;
    public Miembro $SwMiembro;
    public $Miembroid;
    public $imagen;
    public $estado;
    public $puesto;
    public $descripcion;
    public $nombre;
    public $mensaje;
    public $caption;
    public $error;
    public $mod;
    public $title;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function MostrarMiembros(Miembro $Miembros)
    {
        if($this->mod == true){
            $this->mod=false;
        }else{
            $this->mod=true;
        }
            $this->SwMiembros=$Miembros;
            $this->title="Actualizar Miembro";
            $this->temporal=$this->SwMiembros->imagen;
            $this->nombre=$this->SwMiembros->nombre;
            $this->puesto=$this->SwMiembros->puesto;
            $this->descripcion=$this->SwMiembros->descripcion;
            $this->estado=$this->SwMiembros->estado;
    
            $this->Miembroid=$this->SwMiembros->id;
    }

    public function Save()
    {
        $this->validate([
        'imagen' => 'required|image',
        'nombre' => 'required|max:20',
        'puesto' => 'required|max:30',
        'descripcion' => 'required',
        'estado' => 'required|string|max:11',
        ]);
        $name = date('m-d-Y-h-i-s-a', time());
        $mie= new Miembro;
        $mie->imagen=$name.'.png';
        $mie->nombre=$this->nombre;
        $mie->puesto=$this->puesto;
        $mie->descripcion=$this->descripcion;
        $mie->estado=$this->estado;
        $mie->creado_por=Auth::user()->id;
        if($this->imagen->storeAs('resources/Miembros',$name.'.png')){
            if($mie->save()){
                $this->mensaje=true;
                $this->caption="Miembro Gardado Correctamente";
            }else{
                $this->mensaje=true;
                $this->error=true;
                $this->caption="No se pudo guardar el Miembro";
            }
        }else{
            $this->mensaje=true;
                $this->error=true;
                $this->caption="No se pudo guardar la imagen";
        }
        
        $this->resetInputFields(); 
    }

    public function resetInputFields(){
        $this->title="";
        $this->nombre="";
        $this->puesto="";
        $this->descripcion="";
        $this->imagen="";
        $this->estado="Activo";
        $this->mensaje=false;
        $this->caption="";
        $this->temporal="";
        $this->error=false;
        $this->resetValidation();
    }

    public function alert(){
        $this->mensaje=false;
    }

    public function Update( Miembro $Miembro){
       
        if($Miembro->id === $this->Miembroid){
            
            if($this->imagen != "" && $this->imagen != $Miembro->imagen){ 
            $this->validate([
                'imagen' => 'required|image|unique:miembros,imagen,'. $this->Miembroid,
                'nombre' => 'required|max:20|unique:miembros,nombre,'. $this->Miembroid,
                'puesto' => 'required|max:30',
                'descripcion' => 'required',
                'estado' => 'required|string|max:11',
                ]);
            }else{
                $this->validate([
                    'estado' => 'required|string|max:11',
                    ]);
            }   
        $Miembro->imagen=$Miembro->imagen;
        $Miembro->nombre=$this->nombre;
        $Miembro->puesto=$this->puesto;
        $Miembro->descripcion=$this->descripcion;
        $Miembro->estado=$this->estado;
        $Miembro->creado_por=Auth::user()->id;
        
        if($this->imagen != "" && $this->imagen != $Miembro->imagen){
            
        if($this->imagen->storeAs('resources/Miembros', $Miembro->imagen)){
            $this->temporal=$Miembro->imagen;
            if($Miembro->save()){
                $this->mensaje=true;
                $this->caption="Miembro actualizado Correctamente";
            }else{
                $this->mensaje=true;
                $this->error=true;
                $this->caption="No se pudo actualizar el Miembro";
            }
        }else{
            $this->mensaje=true;
                $this->error=true;
                $this->caption="No se pudo actualizar la imagen";
        }
    }else{
        if($Miembro->save()){
            $this->mensaje=true;
            $this->caption="Miembro actualizado Correctamente";
        }else{
            $this->mensaje=true;
            $this->error=true;
            $this->caption="No se pudo actualizar el Miembro";
        }
    }

    }else{
        $this->mensaje=true;
        $this->error=true;
        $this->caption="Ha ocurrido un problema";
    }
    }

    public function hydrate()
    {
        if($this->mod == false){
        $this->resetInputFields();
        }
    }

    public function render()
    {
        if(!empty($this->search) && $this->show == "Activo" || $this->show == "Inactivo"){
            $Miembros=Miembro::where('nombre', 'like', '%'.$this->search.'%')->where('estado', $this->show)->paginate($this->showcant);
        }else if($this->show == "Activo" || $this->show == "Inactivo"){
            $Miembros=Miembro::where('estado', $this->show)->paginate($this->showcant);
        }else if(!empty($this->search)){
            $Miembros=Miembro::where('nombre', 'like', '%'.$this->search.'%')->paginate($this->showcant);
        }else{
                $Miembros=Miembro::paginate($this->showcant);
        }
        return view('livewire.admin.miembros',compact('Miembros'));
    }
}
