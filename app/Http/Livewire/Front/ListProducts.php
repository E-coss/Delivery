<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Productos;

class ListProducts extends Component
{
    public function render()
    {

        $Productos=Productos::get();

        return view('livewire.front.list-products',compact('Productos'));
    }
}
