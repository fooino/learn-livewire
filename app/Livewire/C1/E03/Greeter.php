<?php

namespace App\Livewire\C1\E03;

use Livewire\Component;

class Greeter extends Component
{
    public $name = '';
    public $greeting = 'hi';
    public $symbol = '';

    public function changeName() {}

    public function render()
    {
        return view('livewire.c1.e03.greeter');
    }
}
