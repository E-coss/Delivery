<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Productos;
use App\Models\Categorias;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Producto extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $showcant = null;
    public $search;
    public $show;
    public $modal;
    public $temporal;
    public Productos $SwProductos;
    public $Productosid;
    public $nombre;
    public $descripcion;
    public $slug;
    public $precio_compra;
    public $precio_venta;
    public $imagen;
    public $categoriaid;
    public $estado;
    public $mensaje;
    public $caption;
    public $error;
    public $mod;
    public $modedit;
    public $title;

    public function mount(){
        $this->showcant = 5;
        $this->show = '';
        $this->search = '';
        $this->modal =false;
        $this->Productosid =0;
        $this->categoriaid =0;
        $this->slug="";
        $this->precio_compra=0.00;
        $this->precio_venta=0.00;
        $this->imagen="";
        $this->nombre="";
        $this->descripcion="";
        $this->estado="Disponible";
        $this->mensaje=false;
        $this->caption="";
        $this->error=false;
        $this->mod=false;
        $this->modedit=false;
        $this->title="";
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function MostrarProductos(Productos $Productos)
    {
        if($this->mod == true){
            $this->mod=false;
        }else{
            $this->mod=true;
        }
            $this->SwProductos=$Productos;
            $this->title="Actualizar Producto";
            $this->nombre=$this->SwProductos->nombre;
            $this->descripcion=$this->SwProductos->descripcion;
            $this->slug=$this->SwProductos->slug;
            $this->precio_compra=$this->SwProductos->precio_compra;
            $this->precio_venta=$this->SwProductos->precio_venta; 
            $this->temporal=$this->SwProductos->imagen; 
            $this->categoriaid=$this->SwProductos->categoria_id; 
            $this->estado=$this->SwProductos->estado;
    
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
        'categoriaid' => 'required|numeric',
        'imagen' => 'required|image',
        'estado' => 'required|string|max:11',
        ]);

        $pro= new Productos;
        $pro->nombre=$this->nombre;
        $pro->descripcion=$this->descripcion;
        $pro->slug=$this->slug;
        $pro->precio_compra=$this->precio_compra;
        $pro->precio_venta=$this->precio_venta;
        $pro->imagen=$this->slug.'.png';
        $pro->estado=$this->estado;
        $pro->categoria_id=$this->categoriaid;
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
                $this->caption="No se pudo guardar la imagen del producto";
        }
        
        $this->resetInputFields(); 
    }

    public function resetInputFields(){
        $this->slug="";
        $this->title="";
        $this->precio_compra=0.00;
        $this->precio_venta=0.00;
        $this->imagen="";
        $this->nombre="";
        $this->descripcion="";
        $this->estado="Disponible";
        $this->mensaje=false;
        $this->caption="";
        $this->temporal="";
        $this->error=false;
        $this->resetValidation();
    }

    public function alert(){
        $this->mensaje=false;
    }

    public function Update( Productos $producto){
       
        if($producto->id === $this->Productosid){
            
            if($this->imagen != "" && $this->imagen != $producto->imagen){ 
                $name = date('m-d-Y-h-i-s-a', time());
                $img=$producto->imagen;
            $this->validate([
                'nombre' => 'required|string|max:50|unique:Productos,nombre,' . $this->Productosid,
                'descripcion' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:Productos,slug,'. $this->Productosid,
                'precio_compra' => 'required|numeric',
                'precio_venta' => 'required|numeric',
                'categoriaid' => 'required|numeric',
                'imagen' => 'required|image',
                'estado' => 'required|string|max:11',
                ]);
                $producto->imagen=$name.".png";
            }else{
                $this->validate([
                    'nombre' => 'required|string|max:50|unique:Productos,nombre,' . $this->Productosid,
                    'descripcion' => 'required|string|max:255',
                    'slug' => 'required|string|max:255|unique:Productos,slug,' . $this->Productosid,
                    'precio_compra' => 'required|numeric',
                    'precio_venta' => 'required|numeric',
                    'categoriaid' => 'required|numeric',
                    'estado' => 'required|string|max:11',
                    ]);
            }   
        
        
        
        $producto->nombre=$this->nombre;
        $producto->descripcion=$this->descripcion;
        $producto->slug=$this->slug;
        $producto->precio_compra=$this->precio_compra;
        $producto->precio_venta=$this->precio_venta;
        $producto->estado=$this->estado;
        $producto->categoria_id=$this->categoriaid;
        $producto->actualizado_por=Auth::user()->id;
        
        if($this->imagen != ""){
            
        if($this->imagen->storeAs('resources/productos',$name.'.png')){
            unlink(public_path('resources/productos/'.$img));
            $this->temporal=$producto->imagen;
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
                $this->caption="No se pudo actualizar la imagen";
        }
    }else{
        if($producto->save()){
            $this->mensaje=true;
            $this->caption="producto actualizado Correctamente";
        }else{
            $this->mensaje=true;
            $this->error=true;
            $this->caption="No se pudo actualizar el producto";
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
        if(!empty($this->search) && $this->show == "Disponible" || $this->show == "Agotado"){
            $Productos=Productos::where('nombre', 'like', '%'.$this->search.'%')->where('estado', $this->show)->paginate($this->showcant);
        }else if($this->show == "Disponible" || $this->show == "Agotado"){
            $Productos=Productos::where('estado', $this->show)->paginate($this->showcant);
        }else if(!empty($this->search)){
            $Productos=Productos::where('nombre', 'like', '%'.$this->search.'%')->paginate($this->showcant);
        }else{
                $Productos=Productos::paginate($this->showcant);
        }
        $Cat=Categorias::where('estado', 'Activo')->get();
        return view('livewire.admin.producto',compact('Productos','Cat'));
    }
}
