<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Slides;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class SliderPhotoAdmin extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $showcant = null;
    public $show;
    public $temporal;
    public Slides $SwSlides;
    public $Slideid;
    public $imagen;
    public $estado;
    public $mensaje;
    public $caption;
    public $error;
    public $mod;
    public $title;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function MostrarSlides(Slides $Slides)
    {
        if($this->mod == true){
            $this->mod=false;
        }else{
            $this->mod=true;
        }
            $this->SwSlides=$Slides;
            $this->title="Actualizar Slider";
            $this->temporal=$this->SwSlides->imagen;
            $this->estado=$this->SwSlides->estado;
    
            $this->Slideid=$this->SwSlides->id;
    }

    public function Save()
    {
        $this->validate([
        'imagen' => 'required|image',
        'estado' => 'required|string|max:11',
        ]);
        $name = date('m-d-Y-h-i-s-a', time());
        $sli= new Slides;
        $sli->imagen=$name.'.png';
        $sli->estado=$this->estado;
        $sli->creado_por=Auth::user()->id;
        if($this->imagen->storeAs('resources/slides',$name.'.png')){
            if($sli->save()){
                $this->mensaje=true;
                $this->caption="Slide Gardado Correctamente";
            }else{
                $this->mensaje=true;
                $this->error=true;
                $this->caption="No se pudo guardar el Slide";
            }
        }else{
            $this->mensaje=true;
                $this->error=true;
                $this->caption="No se pudo guardar la imagen del Slide";
        }
        
        $this->resetInputFields(); 
    }

    public function resetInputFields(){
        $this->title="";
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

    public function Update( Slides $slide){
       
        if($slide->id === $this->Slideid){
            
            if($this->imagen != "" && $this->imagen != $slide->imagen){ 
                $name = date('m-d-Y-h-i-s-a', time());
            $this->validate([
                'imagen' => 'required|image|unique:Slides,imagen,'. $this->Slideid,
                'estado' => 'required|string|max:11',
                ]);
                $slide->imagen=$name.".png";
            }else{
                $this->validate([
                    'estado' => 'required|string|max:11',
                    ]);
            }   
        
        $slide->estado=$this->estado;
        $img=$slide->imagen;
        
        $slide->actualizado_por=Auth::user()->id;
        
        if($this->imagen != ""){
            
        if($this->imagen->storeAs('resources/slides', $name.'.png')){
            unlink(public_path('resources/slides/'.$img));
            $this->temporal=$slide->imagen;
            if($slide->save()){
                $this->mensaje=true;
                $this->caption="Slide actualizado Correctamente";
            }else{
                $this->mensaje=true;
                $this->error=true;
                $this->caption="No se pudo actualizar el Slide";
            }
        }else{
            $this->mensaje=true;
                $this->error=true;
                $this->caption="No se pudo actualizar la imagen";
        }
    }else{
        if($slide->save()){
            $this->mensaje=true;
            $this->caption="Slide actualizado Correctamente";
        }else{
            $this->mensaje=true;
            $this->error=true;
            $this->caption="No se pudo actualizar el Slide";
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
        if($this->show == "Activo" || $this->show == "Inactivo"){
            $Slides=Slides::where('estado', $this->show)->paginate($this->showcant);
        }else{
                $Slides=Slides::paginate($this->showcant);
        }
        return view('livewire.admin.slider-photo-admin', compact('Slides'));
    }
}
