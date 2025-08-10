<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('components.layouts.app');
});


Route::prefix('/c1')->name('c1.')->group(function () {

    Route::get('/e01', App\Livewire\C1\E01\Greeter::class)->name('e01');
    Route::get('/e02', App\Livewire\C1\E02\Greeter::class)->name('e02');
    Route::get('/e03', App\Livewire\C1\E03\Greeter::class)->name('e03');
    Route::get('/e04', App\Livewire\C1\E04\Greeter::class)->name('e04');
    Route::get('/e05', App\Livewire\C1\E05\Greeter::class)->name('e05');
    Route::get('/articles/search', App\Livewire\C1\Article\Search::class)->name('articles.search');
    Route::get('/articles/{article}', App\Livewire\C1\Article\Show::class)->name('articles.show');


    // 
});
