<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Tree\Tree;
use Illuminate\Http\Request;
use App\Models\Tree\Assessment;
use App\Models\Tree\TreeHealth;
use App\Models\Tree\TreeTarget;
use App\Models\Tree\AssessedTree;
use App\Models\Tree\TreeSiteCondition;
use App\Models\Tree\TreeCharacteristic;

class AssessmentForm extends Component
{
    public $assessment;
    public $assessorId;
    public $treeSpecies;
    public $categories;
    public $currentCategory;
    public $currentSection;
    protected $listeners = [
        'goToTreeDetails',    
        'createAssessmentModel'
    ];

    public function mount(Request $request, $assessorId = 1)
    {   
        $assessmentId  = $request->get('assessment');
        $this->assessment = Assessment::find($assessmentId);
        $this->assessment->update([
            'started_at' => now()
        ]);
        $this->currentCategory  = $request->get('category');
        $this->currentSection  = $request->get('section');
        $this->assessorId       = auth()->id();
        dd($this->assessment);

    }

    public function goToTreeDetails(Request $request, Tree $tree)
    {
        // // dd($request->all());
        // $this->treeSpecies      = $tree;
        // $this->currentCategory  = 'tree_details';
    }
    
    // public function createAssessmentModel($assessedTree)
    // {
    //     $this->assessment = new Assessment([
    //         'assessor_id'       => $this->assessorId,
    //         'assessed_tree_id'  => $assessedTree['id'],
    //         'last_category_completed' => $this->currentCategory,
    //         'started_at'        => now()
    //     ]);
    //     $this->assessment->save();
    //     $this->getAssessmentCategories();
    // }
    // TODO: move this
    public function getAssessmentCategories()
    {
         $this->categories =  [
                'assessment_categories' => [
                    'characteristics'   => collect(TreeCharacteristic::toBase()->get())->groupBy('section')->toArray(),
                    'health'            => collect(TreeHealth::toBase()->get())->groupBy('section')->toArray(),
                    'site_conditions'   => collect(TreeSiteCondition::toBase()->get())->groupBy('section')->toArray(),
                    'targets'           => collect(TreeTarget::toBase()->get())->groupBy('section')->toArray(),
                ]
            ];
        
        $this->currentCategory = 'assessment_categories';
    }

    public function render()
    {
        return view('livewire.trees.assessment-form');
    }
}