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
    
    // /**
    //  * Method untuk menginisialisasi task
    //  * @param Task $task
    //  * @return void
    //  */
    // public function mount(Task $task)
    // {
    //     $this->task = $task;
    //     $this->syncTaskData();
    // }

    // public function syncTaskData()
    // {
    //     $this->title = $this->task->title;
    //     $this->completed = (bool) $this->task->completed;
    // }
    
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

    // // Hapus method startEdit, saveEdit, cancelEdit
    // // Tambahkan ini:
    // public function editTask()
    // {
    //     // $this->dispatch('open-edit-modal', task: $this->task);
    //     $this->dispatch('open-edit-modal', task: $this->task);
    // }


    public function render()
    {
        return view('livewire.task-item');
    }
}
