<?php

namespace App\Livewire\C1\Article;

use App\Models\Article;
use Livewire\Component;

class Show extends Component
{

    public Article $article;

    public function render()
    {
        return view('livewire.c1.article.show');
    }
}
