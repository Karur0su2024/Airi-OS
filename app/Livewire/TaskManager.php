<?php

namespace App\Livewire;
use App\Models\Task;

use Livewire\Component;

class TaskManager extends Component
{

    public $tasks;

    public function render()
    {
        return view('livewire.task-manager');
    }

    public function mount(){
        $this->tasks = Task::all();
    }
}
