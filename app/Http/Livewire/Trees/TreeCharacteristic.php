<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Trees\TreeCharacteristic as Characteristics;

class TreeCharacteristic extends Component
{
    public $assessment;
    public $treeCharacteristics;
    public $treeForms;
    public $form;
    public $treeCrownClasses;
    public $crownClass;
    public $treeAgeClasses;
    public $treeSpecialValues;


    public function addCharacteristic()
    {
        $this->assessment->characteristics()->attach($this->form);
        // dd($this->form);
    }

    public function getCharacteristics()
    {
        // the toBase method returns only the data and doesnt create a model
        $characteristics = Characteristics::toBase()->get();
        // grouped By returns a new keyed value array of collections
        $this->treeCharacteristics = $characteristics->groupBy('type')->all();
        $this->treeForms = $this->treeCharacteristics['form'];
        $this->treeCrownClasses = $this->treeCharacteristics['crown class'];
        $this->treeAgeClasses = $this->treeCharacteristics['age class'];
        $this->treeSpecialValues = $this->treeCharacteristics['special value'];
    }

    public function render()
    {
        $this->getCharacteristics();
        return view('livewire.trees.tree-characteristic');
    }
}
