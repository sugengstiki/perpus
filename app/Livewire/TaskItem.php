<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskItem extends Component
{
    public $task; // Properti untuk menerima data task
    
    public $title;
    public $completed;

    protected $listeners = ['taskUpdated' => 'refreshTask'];

    public function refreshTask($taskId)
    {
        if ($this->task->id == $taskId) {
            $this->task->refresh();
        }
    }
    
    /**
     * Method untuk mengubah status task menjadi selesai atau belum selesai
     */
    public function toggleComplete()
    {
        $this->task->update(['completed' => !$this->task->completed]);        
     
    }

    public function deleteTask()
    {
        $this->dispatch('task-deleted', task: $this->task);
    }

    public function render()
    {
        return view('livewire.task-item');
    }
}
