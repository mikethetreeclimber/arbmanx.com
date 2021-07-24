<?php

namespace App\Http\Livewire\Trees;

use Error;
use Exception;
use Livewire\Component;
use App\Models\Tree\Tree;
use App\Models\Tree\Assessment;
use App\Models\Tree\AssessedTree;
use App\Models\Tree\TreeCharacteristic;
use App\Models\Tree\TreeHealth;
use App\Models\Tree\TreeSiteCondition;
use App\Models\Tree\TreeTarget;

class AssessmentForm extends Component
{
    public $assessment;
    public $categories = [];
    public $currentCategory = 1;
    protected $listeners = ['treeSpeciesAdded', 'attachValuesAndProcced'];

    public function mount()
    {
        $this->assessment = new Assessment;
        $this->getCategories();
    }

    public function getAssessmentFormValuesProperty()
    {
        return
            [
                'tree_details' => [],
                // 'demensions' => [],
                'characteristics'   => collect(TreeCharacteristic::toBase()->get())->groupBy('section')->all(),
                'health'            => collect(TreeHealth::toBase()->get())->groupBy('section')->all(),
                'site_conditions'   => collect(TreeSiteCondition::toBase()->get())->groupBy('section')->all(),
                'targets'           => collect(TreeTarget::toBase()->get())->groupBy('section')->all(),
            ];


    }

    public function getCategories()
    {
        $forms = $this->AssessmentFormValues;
        $categories = [];
        foreach ($forms as $key => $form) {
            array_push($categories, [$key => $form]);
       }
       $this->categories = $categories;
    }


    public function attachValuesAndProcced($relationship, $sectionsToComplete, $currentCategoryValuesToAttach)
    {
        dd($relationship, $sectionsToComplete, $currentCategoryValuesToAttach);
        $this->currentCategory++;
        // try {
        //     collect($currentCategoryValuesToAttach)
        //     ->flatten()
        //     ->map(function ($currentCategoryValuesToAttach) use ($relationship) {
        //     $this->assessment->{$relationship}()->attach($currentCategoryValuesToAttach);
        //     });

        //     session()->flash('success', 'The Tree\'s '.ucwords($this->category).' were successfully added to the Hazard Assessment');
        // }
        // catch (Exception $e) {
        //     return session()->flash('error', $e->getMessage());
        // }
        // catch (Error $err) {
        //     return session()->flash('error', 'Opps something went wrong!');
        // } finally {
        //     redirect()->back();
        // }
    }

    public function treeSpeciesAdded(Tree $tree)
    {
        $this->tree_id = $tree->id;
        $this->currentCategory++;
    }

    public function createAssessedTreeDetails()
    {
        // Move to its own controller
        $assessedTree = AssessedTree::create([
                'owner_id' => 1,
                'tree_id' =>  $this->tree_id,
                'dbh' => $this->dbh,
                'height' => $this->height,
                'spread' => $this->spread,
                'number_of_trunks' => $this->numberOfTrunks
        ]);
        $assessedTree->save();

        $this->assessment = Assessment::create([
                'assessed_tree_id' => $assessedTree->id,
                'assessor_id' => auth()->id(),
                'last_section_completed' => 'tree_details'
        ]);
        $this->assessment->save();

        $this->category = 'characteristics';
        session()->flash('success', 'The tree details were successfully added to the Hazard Assessment');

    }

    public function render()
    {
        return view('livewire.trees.assessment-form');
    }
}
