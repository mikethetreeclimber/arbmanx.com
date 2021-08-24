<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Trees\TreeDetails;
use App\Http\Livewire\Trees\AssessmentForm;
use App\Http\Livewire\Trees\TreeSpeciesSelect;
use App\Http\Controllers\Trees\TreeHazardAssessmentController;
use App\Http\Livewire\Trees\TreeAssessmentEvaluationCategories;
use App\Http\Controllers\Trees\TreeAssessmentEvaluationController;
use App\Http\Livewire\Trees\CharacteristicsEvaluationForm;

Route::get('/start/{test}',function (Request $request) {
    session()->flash('success', 'this is a test');
    dd($request);
});

Route::middleware('auth')->prefix('/trees')->name('trees.')->group( function(){
    Route::prefix('/hazard/assessment')->name('hazard.assessment.')->group(function() {
        Route::get('/', [TreeHazardAssessmentController::class, 'index'])->name('index');
        Route::get('/start', [TreeHazardAssessmentController::class, 'create'] )->name('start');
        // Route::get('/{id}', [TreeHazardAssessmentController::class, 'edit'] )->name('continue');
    });
    Route::prefix('/assessment/{assessment}/evaluation')->name('assessment.evaluation.')->group(function() {
        Route::prefix('/characteristics')->name('characteristics.')->group(function() {
            Route::get('/', [TreeAssessmentEvaluationController::class, 'characteristics'])->name('index');
            Route::get('/form', CharacteristicsEvaluationForm::class)->name('form');
        });
        Route::get('/health', [TreeAssessmentEvaluationController::class, 'health'])->name('health');
        Route::get('/site_conditions', [TreeAssessmentEvaluationController::class, 'site_conditions'])->name('site_conditions');
        Route::get('/defects', [TreeAssessmentEvaluationController::class, 'defects'])->name('defects');
        Route::get('/targets', [TreeAssessmentEvaluationController::class, 'targets'])->name('targets');
    });
});


Route::middleware('auth')->prefix('/trees')->name('trees.')->group( function(){
    Route::prefix('/assessment')->name('assessment.')->group(function() {
        Route::get('/', AssessmentForm::class)->name('form');
        Route::get('/tree_species', TreeSpeciesSelect::class)->name('species');
        Route::get('/tree_details', TreeDetails::class)->name('details');
        Route::get('/evaluation', TreeAssessmentEvaluationCategories::class)->name('evaluation');
    });
});