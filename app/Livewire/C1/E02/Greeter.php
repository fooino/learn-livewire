<?php

namespace App\Livewire\C1\E02;

use Livewire\Component;

class Greeter extends Component
{

    public $name = 'John';


    public function changeNameToAva()
    {
        $this->name = 'Ava';
    }

    public function changeNameByArgument($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.c1.e02.greeter');
    }
}
