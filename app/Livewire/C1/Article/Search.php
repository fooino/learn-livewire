<?php

namespace App\Livewire\C1\Article;

use App\Models\Article;
use Livewire\Component;

class Search extends Component
{

    public $searched = '';
    public $articles = [];

    public function updatedSearched($value)
    {
        $this->reset('articles');

        $this->validate([
            'searched'  => 'required|min:3'
        ]);

        $this->articles = Article::search($value)->get();
    }

    public function clear()
    {
        $this->reset('articles', 'searched');
    }

    public function render()
    {
        return view('livewire.c1.article.search');
    }
}
