<?php

use App\Http\Livewire\Trees\Assessment;
use Illuminate\Support\Facades\Route;

Route::get('/customers', function () {
    return "this is the customers index route";
});


Route::group(['middleware'=> 'auth'], function(){
    Route::get('/trees/assessment', Assessment::class);
});