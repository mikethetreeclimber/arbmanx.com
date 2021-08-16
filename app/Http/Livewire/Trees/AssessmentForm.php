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
    public $section;
    protected $queryString = [
        'currentCategory',
        'section'
    ];

    protected $listeners = [
        'goToTreeDetails',    
        'createAssessmentModel',
        'setQueryString'
    ];

    public function mount($lastCategoryCompleted = 'tree_species', $assessorId = 1)
    {   
        $this->section          = null;
        $this->currentCategory  = $lastCategoryCompleted;
        $this->assessorId       = $assessorId;
    }

    public function setQueryString($currentCategory, $section)
    {
        $this->reset();
        $this->currentCategory  = $currentCategory;
        $this->section  = $section;
    }
    
    public function goToTreeDetails(Tree $tree)
    {
        $this->treeSpecies      = $tree;
        $this->currentCategory  = 'tree_details';
    }
    
    public function createAssessmentModel(AssessedTree $assessedTree)
    {
        $this->assessment = new Assessment([
            'assessor_id'               => $this->assessorId,
            'assessed_tree_id'          => $assessedTree->id,
            'last_category_completed'   => $this->currentCategory,
            'started_at'                => now()
        ]);
        $this->assessment->save();
        $this->getAssessmentCategories();
    }

    // TODO once to this part of assessment all logic should be called by categries component
    public function getAssessmentCategories()
    {
        // TODO: move to repository maybe that will be called by the component
         $this->categories =  [
                'assessment_categories' => [
                    'characteristics'   => collect(TreeCharacteristic::toBase()->get())->groupBy('section')->toArray(),
                    'health'            => collect(TreeHealth::toBase()->get())->groupBy('section')->toArray(),
                    'site_conditions'   => collect(TreeSiteCondition::toBase()->get())->groupBy('section')->toArray(),
                    'targets'           => collect(TreeTarget::toBase()->get())->groupBy('section')->toArray(),
                ]
            ];
            // TODO move to the categories component
            $this->currentCategory  = key($this->categories['assessment_categories']);
            $this->section          = key($this->categories['assessment_categories'][$this->currentCategory]);
    }

    public function render()
    {
        return view('livewire.trees.assessment-form');
    }
}