<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Productos;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class Producto extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $showcant = null;
    public $search;
    public $show;
    public $modal;
    public Productos $SwProductos;
    public $Productosid;
    public $nombre;
    public $descripcion;
    public $slug;
    public $precio_compra;
    public $precio_venta;
    public $imagen;
    public $estado;
    public $mensaje;
    public $caption;
    public $error;

    public function mount(){
        $this->showcant = 5;
        $this->show = '';
        $this->search = '';
        $this->modal =false;
        $this->Productosid =0;
        $this->slug;
        $this->precio_compra;
        $this->precio_venta;
        $this->imagen;
        $this->nombre;
        $this->descripcion;
        $this->estado="Disponible";
        $this->mensaje=false;
        $this->caption="";
        $this->error=false;
    }

    protected $rules = [
        'SwProductos.nombre' => 'required|string|max:50|unique:Productos,nombre',
        'SwProductos.descripcion' => 'required|string|max:255',
        'SwProductos.slug' => 'required|string|max:255|unique:Productos,slug',
        'SwProductos.precio_compra' => 'required|numeric',
        'SwProductos.precio_venta' => 'required|numeric',
        'SwProductos.imagen' => 'required|image',
        'SwProductos.estado' => 'required|string|max:9',
    ];



    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function MostrarProductos(Productos $Productos)
    {
        $this->resetInputFields();
            $this->SwProductos=$Productos;
            $this->modal=true;
            $this->Productosid=$this->SwProductos->id;
    }

    public function Save()
    {
        $this->validate([
        'nombre' => 'required|string|max:50|unique:Productos,nombre',
        'descripcion' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:Productos,slug',
        'precio_compra' => 'required|numeric',
        'precio_venta' => 'required|numeric',
        'imagen' => 'required|image',
        'estado' => 'required|string|max:9',
        ]);

        $pro= new Productos;
        $pro->nombre=$this->nombre;
        $pro->descripcion=$this->descripcion;
        $pro->slug=$this->slug;
        $pro->precio_compra=$this->precio_compra;
        $pro->precio_venta=$this->precio_venta;
        $pro->imagen=$this->imagen;
        $pro->estado=$this->estado;
        $pro->creado_por=Auth::user()->id;
        if($this->imagen->storeAs('resources/productos', $this->slug.'.png')){
            if($pro->save()){
                $this->mensaje=true;
                $this->caption="producto Gardado Correctamente";
            }else{
                $this->mensaje=true;
                $this->error=true;
                $this->caption="No se pudo guardar el producto";
            }
        }else{
            $this->mensaje=true;
                $this->error=true;
                $this->caption="No se pudo guardar el producto";
        }
        
        $this->resetInputFields(); 
    }

    public function resetInputFields(){
        $this->nombre = '';
        $this->descripcion = '';
        $this->slug = '';
        $this->precio_compra = 0.00;
        $this->precio_venta = 0.00;
        $this->imagen = '';
        $this->estado="Disponible";
        $this->resetValidation();
    }

    public function alert(){
        $this->mensaje=false;
    }

    public function Update( Productos $producto){
       
        if($producto->id === $this->Productosid){
            
        $this->validate([
            'SwProductos.nombre' => 'required|string|max:50',
            'SwProductos.descripcion' => 'required|string|max:255',
            'SwProductos.estado' => 'required|string|max:9',
        ]);
        $producto->nombre = $this->SwProductos->nombre;
        $producto->descripcion = $this->SwProductos->descripcion;
        $producto->estado = $this->SwProductos->estado;
        $producto->actualizado_por = Auth::User()->id;

        if($producto->save()){
            $this->mensaje=true;
            $this->caption="producto actualizado Correctamente";
        }else{
            $this->mensaje=true;
            $this->error=true;
            $this->caption="No se pudo actualizar el producto";
        }
    }else{
        $this->mensaje=true;
        $this->error=true;
        $this->caption="Ha ocurrido un problema";
    }
        $this->resetInputFields();
    }

    public function render()
    {
        if(!empty($this->search) && $this->show == "Disponible" || $this->show == "Agotado"){
            $Productos=Productos::where('nombre', 'like', '%'.$this->search.'%')->where('estado', $this->show)->paginate($this->showcant);
        }else if($this->show == "Disponible" || $this->show == "Agotado"){
            $Productos=Productos::where('estado', $this->show)->paginate($this->showcant);
        }else if(!empty($this->search)){
            $Productos=Productos::where('nombre', 'like', '%'.$this->search.'%')->paginate($this->showcant);
        }else{
                $Productos=Productos::paginate($this->showcant);
        }
        return view('livewire.admin.producto',compact('Productos'));
    }
}
