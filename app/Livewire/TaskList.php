<?php

namespace App\Livewire;

use Livewire\Component;

class TaskList extends Component
{
    // Properti reaktif untuk menyimpan daftar task
    public $tasks = [
        ['id' => 1, 'title' => 'Belajar Livewire 3', 'completed' => false],
        ['id' => 2, 'title' => 'Buat proyek Task Manager', 'completed' => true],
    ];

    protected $listeners = ['task-deleted' => 'removeTask'];

    public function removeTask($id)
    {
        $this->tasks = array_filter($this->tasks, fn($task) => $task['id'] != $id);
    }

    // Properti untuk input task baru
    public $newTask = '';

    // Method untuk menambah task
    public function addTask()
    {
        if (!empty($this->newTask)) {
            $this->tasks[] = [
                'id' => count($this->tasks) + 1,
                'title' => $this->newTask,
                'completed' => false
            ];

            $this->newTask = ''; // Reset input
        }
    }

    public function deleteTask($index)
    {
        unset($this->tasks[$index]);
        $this->tasks = array_values($this->tasks); // Reset array keys
    }


    public function render()
    {
        return view('livewire.task-list');
    }
}
