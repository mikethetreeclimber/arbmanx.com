<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Tree\Tree;
use Livewire\WithPagination;

class TreeSpeciesSelect extends Component
{
    use WithPagination;

    public $search = '';
    public $category;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function treeSpeciesAdded(Tree $tree)
    {
        $this->emitTo(AssessmentForm::class, 'goToTreeDetails', $tree->id);
    }

    public function render()
    {
        return view('livewire.trees.tree-species-select', [
            'trees' => Tree::search($this->search)->paginate(50),
        ]);
    }
}