<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\Users_roles;
use App\Models\roles;

class Users extends Component
{
    use WithPagination;

    public $showcant = null;
    public $search;
    public $show;
    public $tipo;

    public function mount(){
        $this->showcant = 5;
        $this->show = '';
        $this->search = '';
        $this->tipo = 0;
    }

    

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if(!empty($this->search) && $this->show == "1" || $this->show == "0"){
            $users=User::where('name', 'like', '%'.$this->search.'%')->where('estado', $this->show)->paginate($this->showcant);
        }else if($this->show == "1" || $this->show == "0"){
            $users=User::where('estado', $this->show)->paginate($this->showcant);
        }else if(!empty($this->search)){
            $users=User::where('name', 'like', '%'.$this->search.'%')->paginate($this->showcant);
        }else{
            if($this->tipo == 0){
                $users=User::paginate($this->showcant);
                $roles=roles::get();
            }else{
                $users=Users_roles::with(['tipoUsuario' => function ($query) {
                    $query->where('name', 'like', '%'.$this->search.'%');
                }])->paginate($this->showcant);
                $roles=roles::get();
            }
        }
        return view('livewire.admin.users',compact('users'));
    }
}
