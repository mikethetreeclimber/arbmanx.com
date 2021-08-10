<?php

namespace App\Http\Controllers\Trees;

use Illuminate\Http\Request;
use App\Models\Tree\Assessment;
use App\Http\Controllers\Controller;
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
 
        // return view('livewire.trees.tree-species-select', )
        $url = route('assessment-form', [
            'assessment'    => $this->assessment->id,
            'category'      => $this->category , 
            'section'       => $this->section
        ]);

        return redirect($url);
    }
}