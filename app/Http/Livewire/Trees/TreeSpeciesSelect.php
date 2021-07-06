<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Trees\Tree;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class TreeSpeciesSelect extends Component
{
    use WithPagination;

    public $search = '';
    public $assessedTree = [];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function speciesAddedToAssessedTree(Tree $tree)
    {
        $this->assessedTree[] = ['tree_id' => $tree->id];
        $this->emitUp('treeAdded', $this->assessedTree);
    }

    public function render()
    {
        return view('livewire.trees.tree-species-select', [
            'trees' => DB::table('trees')->where('common_name', 'like', '%'.$this->search.'%')->simplePaginate(5),
        ]);
    }
}
