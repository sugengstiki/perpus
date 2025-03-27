<?php

namespace App\Livewire;

use Livewire\Component;

class TaskItem extends Component
{
    public $task; // Properti untuk menerima data task

    public function toggleComplete()
    {
        $this->task['completed'] = !$this->task['completed'];
    }

    public function deleteTask()
    {
        $this->dispatch('task-deleted', id: $this->task['id']);
    }


    public function render()
    {
        return view('livewire.task-item');
    }
}
