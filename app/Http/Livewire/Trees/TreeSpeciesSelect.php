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
    public $filter = 'common_name';
    public $assessedTree = [];

    public function render()
    {
        return view('livewire.trees.tree-species-select', [
            'trees' => Tree::search($this->search)->paginate(5),
        ]);
    }
}