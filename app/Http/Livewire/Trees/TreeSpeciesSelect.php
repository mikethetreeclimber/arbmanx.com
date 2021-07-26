<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Tree\Tree;
use Illuminate\Pagination\Paginator;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class TreeSpeciesSelect extends Component
{
    use WithPagination;

    public $category;
    public $search = '';
    public $filter = 'common_name';
    public $assessedTree = [];

    public function mount($category)
    {
        $this->category = $category;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.trees.tree-species-select', [
            'trees' => Tree::search($this->search)->paginate(50),
        ]);
    }
}