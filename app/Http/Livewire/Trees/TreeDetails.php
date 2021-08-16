<?php

namespace App\Http\Livewire\Trees;

use App\Models\Tree\AssessedTree;
use App\Models\Tree\Tree;
use Livewire\Component;
use Illuminate\Http\Request;

class TreeDetails extends Component 
{
    public $currentCategory;
    public $assessedTree;
    public $treeId;
    public $ownerId;
    public $treeCommonName;
    public $dbh;
    public $height;
    public $spread;
    public $numberOfTrunks;

    protected $listeners = [
        'createAssessedTreeModel'
    ];

    public function mount(Tree $treeSpecies, $ownerId = 1)
    {
        $this->currentCategory  = 'tree_details';
        $this->ownerId          = $ownerId;                       
        $this->treeId           = $treeSpecies->id;
        $this->treeCommonName   = $treeSpecies->common_name;

    }

    public function createAssessedTreeModel()
    {
        $this->assessedTree = new AssessedTree([
            'tree_id'           => $this->treeId,
            'owner_id'          => $this->ownerId,
            'dbh'               => $this->dbh,
            'height'            => $this->height,
            'spread'            => $this->spread,
            'number_of_trunks'  => $this->numberOfTrunks
        ]);
        $this->assessedTree->save();
        $this->emitTo(AssessmentForm::class, 'createAssessmentModel', $this->assessedTree);
    }

    public function render()
    {
        return view('livewire.trees.tree-details');
    }
}