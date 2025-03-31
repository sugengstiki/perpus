<?php

// EditModelModal.php

use App\Models\Task;
use Livewire\Component;

class EditModelModal extends Component
{
    public $isOpen = false;
    public $taskId;
    public $title; // Replace with actual property names

    protected $listeners = ['openModal' => 'open'];

    public function open($taskId)
    {
        $this->taskId = $taskId;
        $this->loadModel();
        $this->isOpen = true;
    }

    public function loadModel()
    {
        $task = Task::find($this->taskId);
        $this->title = $task->name; // Replace with actual field names
        // Load other model properties as needed
    }

    public function save()
    {
        // Validation and save logic
        $task = Task::find($this->taskId);
        $task->name = $this->title; // Replace with actual field names
        // Update other model properties as needed
        $task->save();

        $this->isOpen = false;
        $this->dispatch('taskUpdated'); // Emit an event if needed
    }

    public function render()
    {
        return view('livewire.edit-model-modal');
    }
}
