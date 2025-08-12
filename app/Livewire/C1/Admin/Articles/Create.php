<?php

namespace App\Livewire\C1\Admin\Articles;

use App\Livewire\C1\Admin\AdminComponent;
use App\Livewire\Forms\C1\Admin\ArticleForm;

class Create extends AdminComponent
{

    public ArticleForm $form;


    public function save()
    {
        $this->form->store();

        $this->redirect(url: route('c1.admin.articles.archive'), navigate: true);
    }

    public function render()
    {
        return view('livewire.c1.admin.articles.create');
    }
}
