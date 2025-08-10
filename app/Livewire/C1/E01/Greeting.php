<?php

namespace App\Livewire\C1\E01;

use Livewire\Component;

class Greeting extends Component
{

    public $name = 'John';

    private $name2 = 'Jack';

    protected $name3 = 'Ava';

    public function render()
    {
        return view('livewire.c1.e01.greeting');
    }
}
