<?php

use Illuminate\Support\Facades\Route;


Route::get('/' , function(){
    return view('components.layouts.app');
});


Route::prefix('/c1')->name('c1.')->group(function () {

    Route::get('/e01', App\Livewire\C1\E01\Greeting::class)->name('e01');
    Route::get('/e02', App\Livewire\C1\E02\Greeter::class)->name('e02');


    // 
});
