<?php

use App\Http\Controllers\Trees\StartTreeHazardAssessmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Trees\AssessmentForm;

Route::get('/start_assessment', [StartTreeHazardAssessmentController::class, 'index'] )
    ->name('start-assessment');
Route::get('/start/{test}',function (Request $request) {
    session()->flash('success', 'this is a test');
    dd($request);
});


Route::group(['middleware'=> 'auth'], function(){
    Route::get('/trees/assessment', AssessmentForm::class)->name('assessment-form');
});