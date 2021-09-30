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
    public $facebook;
    public $instagram;
    public $youtube;
    public $twitter;
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
            $this->facebook=$this->SwMiembros->facebook;
            $this->instagram=$this->SwMiembros->instagram;
            $this->youtube=$this->SwMiembros->youtube;
            $this->twitter=$this->SwMiembros->twitter;
            $this->descripcion=$this->SwMiembros->descripcion;
            $this->estado=$this->SwMiembros->estado;
    
            $this->Miembroid=$this->SwMiembros->id;
    }

    public function Save()
    {
        $this->validate([
        'imagen' => 'required|image',
        'nombre' => 'required|max:30',
        'puesto' => 'required|max:30',
        'descripcion' => 'required',
        'estado' => 'required|string|max:11',
        'facebook' => 'string|max:255',
        'instagram' => 'string|max:255',
        'youtube' => 'string|max:255',
        'twitter' => 'string|max:255',
        ]);
        $name = date('m-d-Y-h-i-s-a', time());
        $mie= new Miembro;
        $mie->imagen=$name.'.png';
        $mie->nombre=$this->nombre;
        $mie->puesto=$this->puesto;
        $mie->descripcion=$this->descripcion;
        $mie->estado=$this->estado;
        $mie->facebook=$this->facebook;
        $mie->instagram=$this->instagram;
        $mie->youtube=$this->youtube;
        $mie->twitter=$this->twitter;
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
        $this->facebook="";
        $this->instagram="";
        $this->youtube="";
        $this->twitter="";
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
                $name = date('m-d-Y-h-i-s-a', time());
            $this->validate([
                'imagen' => 'required|image|unique:miembros,imagen,'. $this->Miembroid,
                'nombre' => 'required|max:30|unique:miembros,nombre,'. $this->Miembroid,
                'puesto' => 'required|max:30',
                'descripcion' => 'required',
                'estado' => 'required|string|max:11',
                'facebook' => 'string|max:255',
                'instagram' => 'string|max:255',
                'youtube' => 'string|max:255',
                'twitter' => 'string|max:255',
                ]);
                $Miembro->imagen=$name.".png";
            }else{
                $this->validate([
                    'estado' => 'required|string|max:11',
                    'facebook' => 'string|max:255',
                    'instagram' => 'string|max:255',
                    'youtube' => 'string|max:255',
                    'twitter' => 'string|max:255',
                    ]);
            }   
        
        $img=$Miembro->imagen;
        
        $Miembro->nombre=$this->nombre;
        $Miembro->puesto=$this->puesto;
        $Miembro->descripcion=$this->descripcion;
        $Miembro->estado=$this->estado;
        $Miembro->facebook=$this->facebook;
        $Miembro->instagram=$this->instagram;
        $Miembro->youtube=$this->youtube;
        $Miembro->twitter=$this->twitter;
        $Miembro->actualizado_por=Auth::user()->id;
        
        if($this->imagen != ""){
            
        if($this->imagen->storeAs('resources/Miembros', $name.'.png')){
            unlink(public_path('resources/Miembros/'.$img));
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
