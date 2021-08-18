<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Tree\Tree;
use Livewire\WithPagination;

class TreeSpeciesSelect extends Component
{
    use WithPagination;

    public $search = '';
    public $confirmSelectedSpecies = false;
    public $treeToConfirm;
    // TODO add filtering and more search options 
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function confirmSelection(Tree $tree = null)
    {
        $this->treeToConfirm = $tree;
        $this->confirmSelectedSpecies = true;
    }

    public function cancelSelection()
    {
    // TODO input unchecked when selection is cancelled 
        $this->render();
        $this->confirmSelectedSpecies = false;
    }

    public function treeSpeciesAdded(Tree $tree)
    {
        return redirect(route('trees.assessment.details', ['treeSpecies' => $tree]));
    }

    public function render()
    {
        return view('livewire.trees.tree-species-select', [
            'trees' => Tree::search($this->search)->paginate(50),
        ]);
    }
}