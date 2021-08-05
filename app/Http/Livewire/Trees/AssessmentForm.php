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

class AssessmentForm extends Component
{
    public $assessment;
    public $assessorId;
    public $treeSpecies;
    public $categories;
    public $currentCategory;
    protected $queryString = [
        'currentCategory',
    ];
    protected $listeners = [
        'goToTreeDetails',    
        'createAssessmentModel'
    ];

    public function mount($lastCategoryCompleted = 'tree_species', $assessorId = 1)
    {   
        $this->currentCategory  = $lastCategoryCompleted;
        $this->assessorId       = $assessorId;
    }

    public function goToTreeDetails(Tree $tree)
    {
        $this->treeSpecies      = $tree;
        $this->currentCategory  = 'tree_details';
    }
    
    public function createAssessmentModel(AssessedTree $assessedTree)
    {
        $this->assessment = new Assessment([
            'assessor_id'       => $this->assessorId,
            'assessed_tree_id'  => $assessedTree->id
        ]);
        $this->assessment->save();
        $this->getAssessmentCategories();
    }
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