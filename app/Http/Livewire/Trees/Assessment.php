<?php

namespace App\Http\Livewire\Trees;

use App\Models\User;
use Livewire\Component;
use App\Models\Trees\Tree;

class Assessment extends Component
{
    public $step = 'tree_species';
    public $assessedTree = [];
    public $dbh;
    public $height;
    protected $listeners = ['treeAdded'];

    public function treeAdded(Tree $tree)
    {
        $this->assessedTree[] = ['tree_id' => $tree->id];
        $this->step = 'height_dbh';
    }

    public function pushDetails()
    {
         array_push($this->assessedTree ,['dbh' => $this->dbh, 'height' => $this->height]);
        dd($this->assessedTree);

    }

    public function render()
    {
        return view('livewire.trees.assessment');
    }
}
