<?php

namespace App\Livewire\C1\E05;

use App\Models\Greeting;
use Livewire\Component;

class Greeter extends Component
{

    public $mountCounter = 0;
    public $name = '';
    public $greeting = '';
    public $symbol = '';
    public $message = '';
    public $greetings;

    public function mount()
    {

        $this->mountCounter++;
        $this->greetings = Greeting::get();
        $this->greeting = $this->greetings->first()->name;
        $this->name = 'John';
        $this->symbol = '!!';

        $this->updateMessage('mount');
    }

    public function updated($property, $value)
    {
        if ($property != 'symbol') {
            $this->updateMessage('updated');
        }
    }

    public function updatedSymbol($value)
    {
        $this->updateMessage('updatedSymbol');
    }

    public function updateMessage($from)
    {
        $this->message = $this->greeting . ', ' . $this->name . ' ' . $this->symbol . ' --> from ' . $from . ' hook';
    }

    public function render()
    {
        return view('livewire.c1.e05.greeter');
    }
}
