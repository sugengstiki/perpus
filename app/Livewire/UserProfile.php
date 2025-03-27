<?php

namespace App\Livewire;

use Livewire\Component;

class UserProfile extends Component
{
    public $name = "John Doe"; // Default value
    public $email = "johndoe@example.com";

    public function mount()
    {
        $this->name = "Guest User";
    }

    public function updated($propertyName)
    {
        session()->flash('message', "Field {$propertyName} telah diperbarui!");
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
