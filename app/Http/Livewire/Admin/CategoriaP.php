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

    public function mount(){
        $this->showcant = 5;
        $this->show = '';
        $this->search = '';
        $this->modal =false;
        $this->Categoriasid =0;
        $this->nombre;
        $this->descripcion;
        $this->estado;
        $this->mensaje=false;
        $this->caption="";
        $this->error=false;
    }

    protected $rules = [
        'SwCategorias.nombre' => 'required|string|max:50|unique:categorias,nombre',
        'SwCategorias.descripcion' => 'required|string|max:255',
        'SwCategorias.estado' => 'required|string|max:9',
    ];

    public function updated($rules)
    {
        $this->validateOnly($rules);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function MostrarCategorias(Categorias $Categorias)
    {
        $this->resetInputFields();
            $this->SwCategorias=$Categorias;
            $this->modal=true;
            $this->Categoriasid=$this->SwCategorias->id;
    }

    public function Save()
    {
        $this->validate([
        'nombre' => 'required|string|max:50|unique:categorias,nombre',
        'descripcion' => 'required|string|max:255',
        'estado' => 'required|string|max:9',
        ]);

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
        $this->estado = '';
        $this->resetValidation();
    }

    public function alert(){
        $this->mensaje=false;
    }

    public function Update( Categoria $categoria){
        $registro = Categorias::findOrFail($this->telefono_id);

        $registro->tipo_telefono = $this->tipo_telefono;
        $registro->numero = $this->telefono;
        $registro->entidad_id = Auth::User()->id;
        $registro->entidad = "U";
        $registro->creado_por = Auth::User()->id;

        if($registro->save()){
            $this->mensaje=true;
            $this->caption="Categoria Gardada Correctamente";
            
            $this->addError('guardado', 'Numero de telefono actualizado correctamente.');
        }else{
            $this->mensaje=true;
            $this->error=true;
            $this->caption="No se pudo guardar la categoria";
            
            $this->addError('errorguardar', 'No se ha podido actualizar su numero de telefono correctamente.');
        }
        $this->resetInputFields();
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
