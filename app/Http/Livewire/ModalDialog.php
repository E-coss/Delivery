<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class ModalDialog extends ModalComponent
{
    public function render()
    {
        return view('livewire.modal-dialog');
    }
}
