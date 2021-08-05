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
    public $section;
    public $sectionTitle;
    public int $sectionIndex;
    public int $sectionsCount;
    public $sectionInputs = [];
    public $selectedValues = [];
    public $sectionsCompleted = [];
    public $inputType;
    public $checkboxes = [
        'special value',
    ];
    public $toggles = [
        'twig dieback'
    ];
    protected $queryString = [
        'section'
    ];
//TODO: make a method to get the category, section and form  properties
// TODO: make this controller reusable for all categories of the assessment
// TODO: add type column to the categories tables and seeders to identify the type of input using a numeric value

    public function mount($categories, $assessment, $lastCategoryCompleted = null, $lastSectionCompleted = null )
    {
        $this->assessment = $assessment;
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
        
        $this->currentCategory  = $this->categoryTitles[$this->categoryIndex];
        $this->category         = $this->categories[$this->categoryIndex];
        $this->setSectionVariables();
    }
    
    public function setSectionVariables()
    {
        $this->sections         = array_keys($this->category);
        $this->sectionsCount    = count($this->sections) - 1;
        $this->sectionsValues   = array_values($this->category);
        $this->sectionTitle     = $this->sections[$this->sectionIndex];
        $this->section          = $this->sectionTitle;
        $this->sectionInputs    = [];
        collect($this->sectionsValues[$this->sectionIndex])
        ->map(function($input){
            array_push($this->sectionInputs, collect($input)->toArray());
        });

        if(in_array($this->sectionTitle, $this->checkboxes)){
            $this->inputType = 'checkbox';
        }elseif(in_array($this->sectionTitle, $this->toggles)){
            $this->inputType = 'button';
        }else{
            $this->inputType = 'radio';
        }
    }

    public function updatedCategory($value)
    {
        dd($value);
    }

    // TODO: catch when a checkboxs value may come back as false from being unchecked, 
    //       if section value is false push to sectionsToComplete
    public function updatedSelectedValues($value, $section)
    {
        $filtered = preg_replace('/\d/', '', $section);
        // if($value === false && in_array($filtered, array_flip($this->sectionsCompleted))){
        //         preg_replace_array((echo $filtered), [], array_flip($this->sectionsCompleted));
        //         return;
        // }
        // if($value === false && !in_array($filtered, array_flip($this->sectionsCompleted))){
        //     return;
        // }else{
        // }
        array_push($this->sectionsCompleted, $filtered);
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
        // session()->flash('success', 'The Tree\'s '.ucwords($this->currentCategory).' were successfully added to the Hazard Assessment');
        $this->sectionIndex = 0;
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
        Log::info([$this->currentCategory =>[$this->selectedValues, $this->sectionsCompleted]]);
        $this->setCategoriesVariables($this->categoryIndex, $this->sectionIndex);
        $this->sectionsToComplete = array_diff($this->sections, $this->sectionsCompleted);
        try {
            collect($this->selectedValues)
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