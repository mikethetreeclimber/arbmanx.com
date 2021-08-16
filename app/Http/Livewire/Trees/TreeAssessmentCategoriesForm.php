<?php

namespace App\Http\Livewire\Trees;

use Error;
use Exception;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class TreeAssessmentCategoriesForm extends Component
{
    public $assessment;
    public $categories;
    public array $category;
    public array $categoryTitles;
    public string $currentCategory;
    public int $categoryIndex;
    public $sections;
    public $sectionTitle;
    public int $sectionIndex;
    public int $sectionsCount;
    public $sectionInputs = [];
    public $selectedValues = [];
    public $sectionsToComplete;
    public $inputType;
    public $checkboxes = [
        'special value',
        'site character',
        'landscape',
        'growth obstructions',
        'soil problems',
        'obstructions',
        'use under tree',
        'prevailing wind direction',
        'common weather',
        'use under tree'
    ];
    public $toggles = [
        'twig dieback',
        'epicormics',
        'can target be moved?',
        'can target be restricted?',
        'target within dripline?',
        'target within 1x the height of the tree?',
        'target within 1.5x the height of the tree?'
    ];
//TODO: make a method to get the category, section and form  properties
// TODO: make this controller reusable for all categories of the assessment
// TODO: add type column to the categories tables and seeders to identify the type of input using a numeric value

    public function mount($categories, $assessment, $lastCategoryCompleted = null, $lastSectionCompleted = null )
    {
        $this->assessment       = $assessment;
        $this->categoryTitles   = array_keys($categories[key($categories)]);
        $this->categories       = collect($categories)->flatten(1);
        $this->setCategoriesVariables($lastCategoryCompleted, $lastSectionCompleted);
    }

    public function setCategoriesVariables($lastCategoryCompleted, $lastSectionCompleted)
    {
        if(!is_null($lastCategoryCompleted)){
            $this->categoryIndex = $lastCategoryCompleted;
        } else {
            $this->categoryIndex = 0;
        }

        if(!is_null($lastSectionCompleted)){
            $this->sectionIndex = $lastSectionCompleted;
        } else {
            $this->sectionIndex = 0;
        }
        // Title below
        $this->currentCategory  = $this->categoryTitles[$this->categoryIndex];
        // Array below
        $this->category         = $this->categories[$this->categoryIndex];
        $this->emitTo(AssessmentForm::class, 'setCategory', $this->currentCategory,);
        $this->setSectionVariables();
    }
    
    public function setSectionVariables()
    {
        $this->sections         = array_keys($this->category);
        $this->sectionsCount    = count($this->sections) - 1;
        $this->sectionsValues   = array_values($this->category);
        $this->sectionTitle     = $this->sections[$this->sectionIndex];
        $this->sectionInputs    = [];
        collect($this->sectionsValues[$this->sectionIndex])
        ->map(function($input){
            array_push($this->sectionInputs, collect($input)->toArray());
        });


        $this->assessment->update([
            'last_category_completed' => $this->currentCategory.'-'.$this->sectionTitle 
        ]);
        if(in_array($this->sectionTitle, $this->checkboxes)){
            $this->inputType = 'checkbox';
        }elseif(in_array($this->sectionTitle, $this->toggles)){
            $this->inputType = 'button';
        }else{
            $this->inputType = 'radio';
        }
        $this->emitTo(AssessmentForm::class, 'setQueryString',$this->currentCategory, $this->sectionTitle);
    }

    public function updatedCategory($value)
    {
        dd($value);
    }

    public function setToggleVariable($toggleVariableId)
    {   
       $this->selectedValues[$this->sectionTitle] = settype($toggleVariableId, 'string');
    }

    public function goToNextSection()
    {
        $this->sectionIndex++;
        $this->setSectionVariables($this->sectionIndex);
    }

    public function goToPreviousSection()
    {
        $this->sectionIndex--;
        $this->setSectionVariables($this->sectionIndex);
    }

    public function goToNextCategory()
    {
        $this->sectionIndex = 0;
        $this->dispatchBrowserEvent('saved', 'The Tree\'s '.ucwords($this->currentCategory).' were successfully added to the Hazard Assessment');
        $this->categoryIndex++;
        $this->setCategoriesVariables($this->categoryIndex, $this->sectionIndex);
    }

    public function goToPreviousCategory()
    {
        $this->categoryIndex--;
        $this->setCategoriesVariables($this->categoryIndex, $this->sectionIndex);
    }

    public function addSelectedValuesToAssessment()
    {
        $this->setCategoriesVariables($this->categoryIndex, $this->sectionIndex);
        // TODO move to a sanitize class or method 
        $this->sectionsToComplete = array_unique(preg_replace('/\d/', '', array_keys(array_diff(array_filter($this->selectedValues), $this->sections))));
        try {
            collect($this->selectedValues)
            ->filter()
            ->flatten()
            ->map(function ($selectedValue) {
            $this->assessment->{$this->currentCategory}()->attach($selectedValue);
            });
        }
        catch (Exception $e) {
            return session()->flash('error', $e->getMessage());
        }
        catch (Error $err) {
            return session()->flash('error', 'Opps something went wrong!');
        } finally {
            redirect()->back();
        }
        $this->selectedValues = [];
        $this->goToNextCategory();
    }

    public function render()
    {
        return view('livewire.trees.tree-assessment-categories-form');
    }
}