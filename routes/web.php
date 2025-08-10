<?php

use Illuminate\Support\Facades\Route;



Route::prefix('/c1')->group(function () {

    Route::get('e01', App\Livewire\C1\E01\Greeting::class);


    // 
});
