<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Tree\TreeCharacteristic;

class TreeAssessmentCategoriesForm extends Component
{
    public $category;
    public $categoryTitle;
    public $formValues;
    public $sectionsValues;
    public $sections = [];
    public $sectionCount;
    public $currentSection;
    public $sectionTitle;
    public $sectionsToComplete =[];
    public $sectionsCompleted =[];
    public $assessment;
    public $characteristics;
    public $selectedValue;
    public $inputType;
    public $checkboxes = [
        'special value',
    ];
    public $toggles = [
        'twig dieback'
    ];
//TODO: make a method to get the category, section and form  properties
// TODO: make this controller reusable for all categories of the assessment
// TODO: add type column to the categories tables and seeders to identify the type of input using a numeric value

    public function mount($category, $lastSectionCompleted = 0)
    {
        $this->currentSection = $lastSectionCompleted;
        $this->category = $category;
        $this->sections = array_keys(array_values($this->category)[0]);
        $this->sectionsToComplete = $this->sections;
        $this->sectionCount = count($this->sections) - 1;
        $this->getFormValues();
    }

    public function getFormValues()
    {

        $this->formValues = [];
        $formValues = json_encode($this->category[strtolower(key($this->category))][$this->sections[$this->currentSection]]);
        $this->formValues = json_decode($formValues, true);
        $this->categoryTitle = ucwords(str_replace('_', ' ', key($this->category)));
        $this->sectionTitle =  ucwords($this->sections[$this->currentSection]);

        if(in_array($this->sections[$this->currentSection], $this->checkboxes)){
            $this->inputType = 'checkbox';
        }elseif(in_array($this->sections[$this->currentSection], $this->toggles)){
            $this->inputType = 'button';
        }else{
            $this->inputType = 'radio';
        }
    }

    // TODO: catch when a checkboxs value may come back as false from being unchecked, if section value is false push to sectionsToComplete
    public function updatedSelectedValue($value)
    {
        // dd($value, $this->sections[$this->currentSection], $this->selectedValue);
        array_push($this->sectionsCompleted, $this->sections[$this->currentSection]);
    }

    public function goForward()
    {
        $this->currentSection++;
        $this->getFormValues();
    }

    public function goBack()
    {
        $this->currentSection--;
        $this->getFormValues();
    }

    public function addSelectedValuesToAssessment()
    {
        $this->sectionsToComplete = array_diff($this->sections, $this->sectionsCompleted);
        $this->emitUp('attachValuesAndProcced',
            ['sectionsToComplete' => $this->sectionsToComplete],
            [$this->categoryTitle => $this->selectedValue],
           );
    }

    public function render()
    {
        return view('livewire.trees.tree-assessment-categories-form');
    }
}