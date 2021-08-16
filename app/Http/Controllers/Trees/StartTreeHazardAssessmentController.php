<?php

namespace App\Http\Controllers\Trees;

use Illuminate\Http\Request;
use App\Models\Tree\Assessment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Trees\AssessmentForm;

class StartTreeHazardAssessmentController extends Controller
{
    public $assessment;
    public $category;
    public $section;
    
    public function __construct(Assessment $assessment, $category = 'tree_species', $section = '')
    {
        $this->category     = $category;
        $this->section      = $section;
        $this->assessment   = $assessment;
        $saved   = $this->assessment->save();
        // dd($this->assessment);
    }

    public function index()
    {
        dd('this is where all the assessments for the current user should be displayed');
    }

    public function create()
    {
        $url = route('trees.assessment.form');

        return redirect($url);
            // return new AssessmentForm();

    }

    public function edit(Assessment $assessment)
    {
        dd($assessment);
    }
}