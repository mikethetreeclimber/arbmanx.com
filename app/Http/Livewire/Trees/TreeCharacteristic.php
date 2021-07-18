<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Trees\TreeCharacteristic as Characteristics;

class TreeCharacteristic extends Component
{
    public $section = 1;
    public $assessment;
    public $treeCharacteristics;
    public $treeForms;
    public $form;
    public $treeCrownClasses;
    public $crownClass;
    public $treeAgeClasses;
    public $ageClass;
    public $treeSpecialValues;
    public $selectedSpecialValues = [];

    public function goForward()
    {
        $this->section++;
    }

    public function goBack()
    {
        $this->section--;
    }


    public function addCharacteristic()
    {
        dump($this->form, $this->crownClass,  $this->assessment, $this->ageClass, $this->selectedSpecialValues);
        die;
        $this->assessment->characteristics()->attach($this->form);
        $this->assessment->characteristics()->attach($this->crownClass);
        $this->assessment->characteristics()->attach($this->ageClass);
        foreach($this->selectedSpecialValues as $specialValue)
        {
            $this->assessment->characteristics()->attach($specialValue);
        }

        $this->emitUp('switchStep', 'health');

        session()->flash('success', 'The Tree\'s Characteristics were successfully added to the Hazard Assessment');
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