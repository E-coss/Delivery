<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Configuracion;

class ContactFront extends Component
{

    public $message;
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|string|min:10',
        'email' => 'required|email|max:50',
        'message' => 'required|string|min:10',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount(){
        $this->message="";
        $this->name="";
        $this->email="";
        $this->soporte=Configuracion::First();
    }

    public function Send(){
        
        $data = array(
            'name'      =>  $this->name,
            'email'   =>   $this->email,
            'message'   =>   $this->message,
            'soporte'   =>   $this->soporte->email
        );
        Mail::to($this->soporte->email)->send(new ContactMail($data));
    }

    public function render()
    {
        return view('livewire.front.contact-front');
    }
}
