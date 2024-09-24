<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class TaskModal extends ModalComponent
{

    public $name;
    public $description;

    public function render()
    {
        return view('livewire.task-modal');
    }
}
