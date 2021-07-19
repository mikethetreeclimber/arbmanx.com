<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Trees\Tree;
use App\Models\Trees\AssessedTree;
use App\Models\Trees\Assessment;

class AssessmentForm extends Component
{
    public $category = 'tree_species';
    public $assessment;
    public $treeDetails;
    public $owner_id;
    public $tree_id;
    public $dbh;
    public $height;
    public $spread;
    public $numberOfTrunks;
    protected $listeners = ['treeSpeciesAdded', 'switchStep'];

    public function switchStep($category)
    {
        session()->flash('success', 'The Tree\'s'.ucwords($this->category).'were successfully added to the Hazard Assessment');
        $this->category = $category;
    }

    public function treeSpeciesAdded(Tree $tree)
    {
        $this->tree_id = $tree->id;
        $this->category = 'height_dbh';
    }

    public function createAssessedTreeDetails()
    {
        $assessedTree = AssessedTree::create([
                'owner_id' => 5,
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