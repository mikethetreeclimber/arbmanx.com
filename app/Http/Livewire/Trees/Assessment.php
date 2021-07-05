<?php

namespace App\Http\Livewire\Trees;

use App\Models\User;
use Livewire\Component;

class Assessment extends Component
{
    public function render()
    {
        dd(User::all());
        return view('livewire.trees.assessment');
    }
}
