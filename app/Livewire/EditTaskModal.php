<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditTaskModal extends Component
{
    public $task;
    public $title;

    protected $listeners = ['open-modal' => 'loadTask'];

    public function loadTask($taskId)
    {
        $this->task = Auth::user()->tasks()->findOrFail($taskId);
        $this->title = $this->task->title;
    }

    public function saveEdit()
    {
        $this->validate([
            'title' => 'required|min:3|max:255'
        ]);

        $this->task->update(['title' => $this->title]);

        $this->dispatch('taskUpdated', $this->task->id);
        $this->dispatch('close-modal');
    }

    public function render()
    {
        return view('livewire.edit-task-modal');
    }
}
