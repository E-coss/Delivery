<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Spatie\Permission\Models\Role;

class Users extends Component
{
    use WithPagination;

    public $showcant = null;
    public $search;
    public $show;
    public $tipo;
    public $modal;
    public User $SwUser;
    public $userid;
    public User $user;
    public $roles = [];

    public function mount(){
        $this->showcant = 5;
        $this->show = '';
        $this->search = '';
        $this->tipo = 0;
        $this->modal =false;
        $this->userid =0;
    }

    

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function MostrarUser(User $user)
    {
       $this->SwUser=$user;
       $this->modal=true;
       $this->userid=$this->SwUser->id;
       $this->user=$this->SwUser;
    }

    public function AsignarRol(User $user)
    {
       $user->roles()->sync($this->roles);
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
            }
        }
        return view('livewire.admin.users',compact('users'));
    }
}
