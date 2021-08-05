<?php

use App\Http\Controllers\Trees\TreeHazardAssessmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Trees\AssessmentForm;

Route::get('/start_assessment', [TreeHazardAssessmentController::class, 'index'] );


Route::group(['middleware'=> 'auth'], function(){
    Route::get('/trees/assessment', AssessmentForm::class)->name('assessment-form');
});