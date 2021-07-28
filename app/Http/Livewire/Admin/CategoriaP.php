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

    public function mount(){
        $this->showcant = 5;
        $this->show = '';
        $this->search = '';
        $this->modal =false;
        $this->Categoriasid =0;
        $this->nombre;
        $this->descripcion;
        $this->estado;
    }

    protected $rules = [
        'SwCategorias.nombre' => 'required|string|max:50',
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
        'nombre' => 'required|string|max:50',
        'descripcion' => 'required|string|max:255',
        'estado' => 'required|string|max:9',
        ]);

        $cat= new Categorias;
        $cat->nombre=$this->nombre;
        $cat->descripcion=$this->descripcion;
        $cat->estado=$this->estado;
        $cat->creado_por=Auth::user()->id;
        $cat->save();
        $this->resetInputFields();
    }

    public function resetInputFields(){
        $this->nombre = '';
        $this->descripcion = '';
        $this->estado = '';
        $this->resetValidation();
    }


    public function Update(){
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
