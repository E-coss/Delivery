<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Categorias;
use Illuminate\Support\Facades\Auth;

class CategoriaP extends Component
{
    use WithPagination;

    public $showcant = null;
    public $search;
    public $show;
    public $modal;
    public Categorias $SwCategorias;
    public $Categoriasid;
    public $nombre;
    public $descripcion;
    public $estado;
    public $mensaje;
    public $caption;
    public $error;
    public $mod;
    public $title;

    public function mount(){
        $this->showcant = 5;
        $this->show = '';
        $this->search = '';
        $this->modal =false;
        $this->Categoriasid =0;
        $this->nombre;
        $this->descripcion;
        $this->mensaje=false;
        $this->caption="";
        $this->error=false;
    }

    protected function rules(){
        return [
            'nombre' => 'required|string|min:5|max:50|unique:categorias,nombre,' . $this->Categoriasid,
            'descripcion' => 'required|string|max:255',
            'estado' => 'required|string|max:9',
        ];
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function MostrarCategorias(Categorias $Categorias)
    {
            $this->SwCategorias=$Categorias;
            $this->nombre=$this->SwCategorias->nombre;
            $this->descripcion=$this->SwCategorias->descripcion;
            $this->estado=$this->SwCategorias->estado;
            $this->mod=true;
            $this->title="Actualizar Categoria";
            $this->Categoriasid=$this->SwCategorias->id;
    }

    public function Save()
    {
        $this->validate();

        $cat= new Categorias;
        $cat->nombre=$this->nombre;
        $cat->descripcion=$this->descripcion;
        $cat->estado=$this->estado;
        $cat->creado_por=Auth::user()->id;
        if($cat->save()){
            $this->mensaje=true;
            $this->caption="Categoria Gardada Correctamente";
        }else{
            $this->mensaje=true;
            $this->error=true;
            $this->caption="No se pudo guardar la categoria";
        }
        $this->resetInputFields(); 
    }

    public function resetInputFields(){
        $this->nombre = '';
        $this->descripcion = '';
        $this->estado="Activo";
        $this->resetValidation();
    }

    public function alert(){
        $this->mensaje=false;
    }

    public function hydrate()
    {
        if($this->mod == false){
        $this->resetInputFields();
        }
    }

    public function Update( Categorias $categoria){
       
        if($categoria->id === $this->Categoriasid){
            
        $this->validate();
        $categoria->nombre = $this->nombre;
        $categoria->descripcion = $this->descripcion;
        $categoria->estado = $this->estado;
        $categoria->actualizado_por = Auth::User()->id;

        if($categoria->save()){
            $this->mensaje=true;
            $this->caption="Categoria actualizada Correctamente";
        }else{
            $this->mensaje=true;
            $this->error=true;
            $this->caption="No se pudo actualizar la categoria";
        }
    }else{
        $this->mensaje=true;
        $this->error=true;
        $this->caption="Ha ocurrido un problema";
    }
    }

    public function render()
    {
        if(!empty($this->search) && $this->show == "Activo" || $this->show == "Inactivo"){
            $categorias=Categorias::where('nombre', 'like', '%'.$this->search.'%')->where('estado', $this->show)->paginate($this->showcant);
        }else if($this->show == "Activo" || $this->show == "Inactivo"){
            $categorias=Categorias::where('estado', $this->show)->paginate($this->showcant);
        }else if(!empty($this->search)){
            $categorias=Categorias::where('nombre', 'like', '%'.$this->search.'%')->paginate($this->showcant);
        }else{
                $categorias=Categorias::paginate($this->showcant);
        }
        return view('livewire.admin.categoria-p',compact('categorias'));
    }
}
