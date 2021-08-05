<?php

namespace App\Http\Controllers\Trees;

use Illuminate\Http\Request;
use App\Models\Tree\Assessment;
use App\Http\Controllers\Controller;
use App\Http\Livewire\Trees\AssessmentForm;

class TreeHazardAssessmentController extends Controller
{
    public $category = 'tree_details';
    public $section = 'species';
    
    public function __construct(Assessment $assessment)
    {
        $this->category = 'tree_details';
        $this->assessment = $assessment;
        dd($this->assessment);
    }

    public function index()
    {
        // return view('livewire.trees.tree-species-select', )
        return redirect()->action(AssessmentForm::class, ['category' => $this->category , 'section' => $this->section]);
    }
}