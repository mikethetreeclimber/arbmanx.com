<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Tree\Assessment;
use App\Models\Tree\TreeCharacteristic;

class CharacteristicsEvaluationForm extends Component
{
    public $characteristics;
    public $assessment;
    public function mount(TreeCharacteristic $treeCharacteristic, Assessment $assessment)
    {
        $this->assessment = $assessment;
        foreach (collect(collect($treeCharacteristic->toBase()->get())->groupBy('section')->toArray()) as $key => $value) {
            foreach ($value as $key1 => $value1) {
                $sections[] = collect($value1)->toArray();
            }
        }
        $this->characteristics = collect($sections)->groupBy('section')->toArray();
    }
    public function render()
    {
        return view('livewire.trees.characteristics-evaluation-form');
    }
}