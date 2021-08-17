<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Trees\TreeDetails;
use App\Http\Livewire\Trees\AssessmentForm;
use App\Http\Livewire\Trees\TreeSpeciesSelect;
use App\Http\Livewire\Trees\TreeAssessmentCategoriesForm;
use App\Http\Controllers\Trees\TreeHazardAssessmentController;

Route::get('/start/{test}',function (Request $request) {
    session()->flash('success', 'this is a test');
    dd($request);
});

Route::middleware('auth')->prefix('/trees')->name('trees.')->group( function(){
    Route::prefix('/assessment')->name('assessment.')->group(function() {
        Route::get('/', [TreeHazardAssessmentController::class, 'index']);
        Route::get('/start', [TreeHazardAssessmentController::class, 'create'] )->name('start');
        // Route::get('/{id}', [TreeHazardAssessmentController::class, 'edit'] )->name('continue');
    });
});


Route::middleware('auth')->prefix('/trees')->name('trees.')->group( function(){
    Route::prefix('/assessment')->name('assessment.')->group(function() {
        Route::get('/', AssessmentForm::class)->name('form');
        Route::get('/tree_species', TreeSpeciesSelect::class)->name('species');
        Route::get('/tree_details', TreeDetails::class)->name('details');
        Route::get('/evaluation', TreeAssessmentCategoriesForm::class)->name('evaluation');
    });
});