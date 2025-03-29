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
        // $this->tasks = Task::where('id', $id)->delete(); // Hapus task dari database
        $task->delete(); // Hapus task dari database
        $this->refresh(); // Refresh daftar task

        // $this->tasks = array_filter($this->tasks, fn($task) => $task['id'] != $id);
    }

    // Properti untuk input task baru

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

    // public function deleteTask($index)
    // {
    //     // $this->tasks[$index]->delete(); // Hapus task dari database
    //     // unset($this->tasks[$index]);
    //     // $this->tasks = array_values($this->tasks); // Reset array keys
    // }


    public function render()
    {
        return view('livewire.task-list');
    }
}
