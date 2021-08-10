<?php

use App\Http\Controllers\Trees\StartTreeHazardAssessmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Trees\AssessmentForm;

Route::get('/start/{test}',function (Request $request) {
    session()->flash('success', 'this is a test');
    dd($request);
});

Route::middleware('auth')->prefix('/trees')->name('trees.')->group( function(){
    Route::prefix('/assessment')->name('assessment.')->group(function() {
        Route::get('/', [StartTreeHazardAssessmentController::class, 'index']);
        Route::get('/start', [StartTreeHazardAssessmentController::class, 'create'] )->name('start');
        Route::get('/{id}', [StartTreeHazardAssessmentController::class, 'update'] )->name('continue');
        Route::get('/', AssessmentForm::class)->name('form');
    });
});