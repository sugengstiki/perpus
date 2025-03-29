<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskItem extends Component
{
    public $task; // Properti untuk menerima data task
    
    public $title;
    public $completed;

    public $isEditing = false;

    /**
     * Method untuk menginisialisasi task
     * @param Task $task
     * @return void
     */
    public function mount(Task $task)
    {
        $this->task = $task;
        $this->syncTaskData();
    }

    public function syncTaskData()
    {
        $this->title = $this->task->title;
        $this->completed = (bool) $this->task->completed;
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

    public function startEdit()
    {
        $this->isEditing = true;
    }

    public function saveEdit()
    {
        // Validasi
        $this->validate([
            'title' => 'required|min:3|max:255'
        ]);

        $this->task->update([
            'title' => $this->title
        ]);
        $this->isEditing = false;
    }

    public function cancelEdit()
    {
        $this->syncTaskData();
        $this->isEditing = false;
    }

    public function render()
    {
        return view('livewire.task-item');
    }
}
