<?php

namespace App\Livewire\C1\Admin\Articles;

use App\Livewire\C1\Admin\AdminComponent;
use App\Livewire\Forms\C1\Admin\ArticleForm;
use App\Models\Article;

class Edit extends AdminComponent
{

    public ArticleForm $form;

    public function mount(Article $article)
    {
        $this->form->setArticle($article);
    }

    public function save()
    {
        $this->form->update();

        $this->redirect(url: route('c1.admin.articles.archive'), navigate: true);
    }

    public function render()
    {
        return view('livewire.c1.admin.articles.create');
    }
}
