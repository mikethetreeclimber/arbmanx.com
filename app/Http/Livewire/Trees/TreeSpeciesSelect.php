<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Tree\Tree;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class TreeSpeciesSelect extends Component
{
    use WithPagination;

    public $category;
    public $search = '';

    public function mount(Request $request)
    {
        dd($request->all());
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function treeSpeciesAdded(Tree $tree)
    {
        $url = route('assessment-form', [
            'category'  => 'tree_details',
            'tree'      =>  $tree->id    
        ]);

        return redirect($url);
        // $this->emitTo(AssessmentForm::class, 'goToTreeDetails', $tree->id);
    }

    public function render()
    {
        return view('livewire.trees.tree-species-select', [
            'trees' => Tree::search($this->search)->paginate(50),
        ]);
    }
}