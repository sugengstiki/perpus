<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $angka = 0;

    public function tambah()
    {
        $this->angka++;
    }
    
    public function render()
    {
        return view('livewire.counter');
    }
}
