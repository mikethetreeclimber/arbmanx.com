<?php

namespace App\Http\Livewire\Trees;

use Asantibanez\LivewireSelect\LivewireSelect;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class TreeSpeciesSelect extends LivewireSelect
{
    public function options($searchTerm = null) : Collection
    {
        //
    }
}