<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Tree\TreeCharacteristic;

class TreeCharacteristicForm extends Component
{
    public $category;
    public $currentSection = 0;
    public $sections = [];
    public $assessment;
    public $treeCharacteristics;
    public $treeForms;
    public $form;
    public $treeCrownClasses;
    public $crownClass;
    public $treeAgeClasses;
    public $ageClass;
    public $treeSpecialValues;
    public $specialValues = [];
    public $selectedValues;

    public function mount()
    {
        $this->setSections();
    }

    public function setSections()
    {
        $this->groupCategoryValues();
        foreach ($this->treeCharacteristics as $key => $section) {
            array_push($this->sections, $key);
        }
    }

    public function groupCategoryValues()
    {
        // the toBase method returns only the data and doesnt create a model
        $characteristics = TreeCharacteristic::toBase()->get();
        // grouped By returns a new keyed value array of collections
        $this->treeCharacteristics = $characteristics->groupBy('section')->all();
    }

    public function goForward()
    {
        $this->currentSection++;
    }

    public function goBack()
    {
        $this->currentSection--;
    }


    public function addCharacteristics()
    {
        $this->selectedValues = collect([$this->form, $this->crownClass, $this->ageClass, $this->specialValues]);
        $this->emitUp('attachValuesAndProcced', 'health', $this->selectedValues);
    }

    public function getCharacteristics()
    {
        $this->groupCategoryValues();
        $this->treeForms = $this->treeCharacteristics['form'];
        $this->treeCrownClasses = $this->treeCharacteristics['crown class'];
        $this->treeAgeClasses = $this->treeCharacteristics['age class'];
        $this->treeSpecialValues = $this->treeCharacteristics['special value'];
    }

    public function render()
    {
        $this->getCharacteristics();
        return view('livewire.trees.tree-characteristic-form');
    }
}