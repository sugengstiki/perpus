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
        $this->fill($task->only(['title', 'completed']));
        $this->completed =  $this->completed == 1 ? true : false;
    }
    
    /**
     * Method ini dijalankan setiap kali ada perubahan pada task
     */
    public function updated()
    {
        $this->task = Task::find($this->task['id']);
    }
    
    /**
     * Method untuk mengubah status task menjadi selesai atau belum selesai
     */
    public function toggleComplete()
    {
        $this->task->update(['completed' => !$this->task->completed]);        
        // $this->refresh();
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
