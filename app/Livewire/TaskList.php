<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskList extends Component
{
    // Properti reaktif untuk menyimpan daftar task
    public $tasks;
    public $newTask = '';

    protected $listeners = ['task-deleted' => 'removeTask'];

    
    public function mount()
    {
        $this->refresh();
    }

    public function refresh()
    {
        $this->tasks = Task::all();
    }

    public function removeTask(Task $task)
    {
        $task->delete(); // Hapus task dari database
        $this->refresh(); // Refresh daftar task
    }

    // Method untuk menambah task
    public function addTask()
    {
        if (!empty($this->newTask)) {
            Task::create([
                'title' => $this->newTask,
                'completed' => false
            ]);

            $this->newTask = ''; // Reset input
            $this->refresh(); // Refresh daftar task
        }
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
