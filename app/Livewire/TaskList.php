<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class TaskList extends Component
{
    use WithPagination,WithoutUrlPagination;

    // Properti reaktif untuk menyimpan daftar task
    // public $tasks;
    public $newTask = '';

    protected $listeners = [
        'task-deleted' => 'removeTask'
    ];

    public function removeTask(Task $task)
    {
        $task->delete(); // Hapus task dari database
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
        }
    }

    public function render()
    {
        return view('livewire.task-list',['tasks' => Task::paginate(3)]);
    }
}
