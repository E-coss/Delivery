<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\Productos;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
   use WithPagination;

        public $showcant = null;
        public $search;
        public $show;
    
        public function mount(){
            $this->showcant = 5;
            $this->show = '';
            $this->search = '';
        }
    
        
    
        public function updatingSearch()
        {
            $this->resetPage();
        }
    
        public function render()
        {
            $usersCount=User::count();
            $productsCount=Productos::count();
            if(!empty($this->search) && $this->show == "1" || $this->show == "0"){
                $users=User::where('name', 'like', '%'.$this->search.'%')->where('estado', $this->show)->paginate($this->showcant);
            }else if($this->show == "1" || $this->show == "0"){
                $users=User::where('estado', $this->show)->paginate($this->showcant);
            }else if(!empty($this->search)){
                $users=User::where('name', 'like', '%'.$this->search.'%')->paginate($this->showcant);
            }else{
                $users=User::paginate($this->showcant);
            }
        return view('livewire.admin.dashboard',compact('users','usersCount','productsCount'));
    }
}
