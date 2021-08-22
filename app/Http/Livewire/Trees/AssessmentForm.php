<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Tree\Tree;
use App\Models\Tree\Assessment;
use App\Models\Tree\TreeHealth;
use App\Models\Tree\TreeTarget;
use App\Models\Tree\AssessedTree;
use App\Models\Tree\TreeSiteCondition;
use App\Models\Tree\TreeCharacteristic;
use Illuminate\Http\Request;

class AssessmentForm extends Component
{
    public $assessorId;
    public $treeSpecies;

    public function mount(Request $request)
    {   
        $this->createAssessmentModel($request->get('assessed_tree'));
    }
    
    public function createAssessmentModel($assessedTreeId)
    {
        $assessment = new Assessment([
            'assessor_id'               => auth()->id(),
            'assessed_tree_id'          => $assessedTreeId,
            'started_at'                => now()
        ]);
        $assessment->save();
        return redirect(route('trees.assessment.evaluation', ['assessment' => $assessment]));
    }

    // // TODO once to this part of assessment all logic should be called by categries component
    // public function getAssessmentCategories()
    // {
    //     // TODO: move to repository maybe that will be called by the component
    //     
    //         // TODO move to the categories component
    //         $this->currentCategory  = key($this->categories['assessment_categories']);
    //         $this->section          = key($this->categories['assessment_categories'][$this->currentCategory]);
    // }

    // public function showModalRequested()
    // {
    //     $this->showModal = true;
    // }

    // public function render()
    // {
    //     return view('livewire.trees.assessment-form');
    // }
}