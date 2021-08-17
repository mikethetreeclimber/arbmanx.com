<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Tree\Tree;
use Illuminate\Http\Request;
use App\Models\Tree\AssessedTree;
use App\Http\Livewire\Trees\AssessmentForm;

class TreeDetails extends Component 
{
    public $treeId;
    public $ownerId;
    public $treeCommonName;
    public $dbh;
    public $height;
    public $spread;
    public $numberOfTrunks;

    public function mount(Request $request, $ownerId = 1)
    {
        $treeSpecies            = Tree::findOrFail($request->get('treeSpecies'));
        $this->ownerId          = $ownerId;                       
        $this->treeId           = $treeSpecies->id;
        $this->treeCommonName   = ucwords($treeSpecies->common_name);
    }
//TODO add validation and dynamic units of measurement 
    public function createAssessedTreeModel()
    {
        $assessedTree = new AssessedTree([
            'tree_id'           => $this->treeId,
            'owner_id'          => $this->ownerId,
            'dbh'               => $this->dbh,
            'height'            => $this->height,
            'spread'            => $this->spread,
            'number_of_trunks'  => $this->numberOfTrunks
        ]);
        
        $assessedTree->save();
        return redirect(route('trees.assessment.form', ['assessed_tree' => $assessedTree]));
    }

    public function render()
    {
        return view('livewire.trees.tree-details');
    }
}