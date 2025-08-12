<?php

namespace App\Livewire\C1\Admin\Articles;

use App\Livewire\C1\Admin\AdminComponent;
use App\Models\Article;

class Archive extends AdminComponent
{

    public function delete(Article $article)
    {
        $article->deleteOrFail();
    }

    public function render()
    {
        return view(
            view: 'livewire.c1.admin.articles.archive',
            data: [
                'articles'  => Article::get()
            ]
        );
    }
}
