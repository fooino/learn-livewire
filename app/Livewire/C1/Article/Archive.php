<?php

namespace App\Livewire\C1\Article;

use App\Models\Article;
use Livewire\Component;

class Archive extends Component
{
    public function render()
    {
        return view(
            view: 'livewire.c1.article.archive',
            data: [
                'articles'  => Article::get(),
            ]
        );
    }
}
