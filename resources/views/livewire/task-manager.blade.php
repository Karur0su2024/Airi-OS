<?php

use Livewire\Volt\Component;
use App\Model\Task;

new class extends Component {
    public $tasks;

    public function mount()
    {
        $this->tasks = Task::all();
    }
};

?>

<div>
    <h1 class="mb-4 text-center">My Tasks</h1>

    <!-- Display message if no tasks available -->
    @if ($tasks->isEmpty())
        <div class="alert alert-info text-center">
            No tasks available.
        </div>
    @else
        <!-- Task List -->
        <div class="list-group">
            @foreach ($tasks as $task)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <!-- Task Name -->
                    <span>{{ $task->name }}</span>

                    <!-- Task Status Badge -->
                    @if ($task->completed)
                        <span class="badge bg-success">Completed</span>
                    @else
                        <span class="badge bg-warning">Pending</span>
                    @endif
                </div>
            @endforeach
        </div>
    @endif

    <button class="btn btn-primary" wire:click="$dispatch('openModal', {component: 'task-modal'})">Add task</button>


