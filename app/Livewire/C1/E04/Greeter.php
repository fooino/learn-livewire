<?php

namespace App\Livewire\C1\E04;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Greeter extends Component
{

    public $name = '';
    public $greeting = 'hi';

    #[Validate('required|in:.,!')]
    public $symbol = '';

    public $message = '';


    public function changeMessage1()
    {

        $this->reset('message');

        $this->validate([
            'name'  => 'required|min:3'
        ]);

        $this->message = $this->greeting . ', ' . $this->name . ' ' . $this->symbol;
    }

    public function changeMessage2()
    {

        $this->reset('message');

        $this->validate();

        $this->message = $this->greeting . ', ' . $this->name . ' ' . $this->symbol;
    }


    public function rules()
    {
        return [
            'name'      => 'required|min:3',
            'symbol'    => 'required'
        ];
    }

    public function render()
    {
        return view('livewire.c1.e04.greeter');
    }
}
