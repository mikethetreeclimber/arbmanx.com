<?php

namespace App\Http\Livewire\Trees;

use Error;
use Exception;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Tree\Assessment;
use App\Models\Tree\TreeHealth;
use App\Models\Tree\TreeTarget;
use Illuminate\Support\Facades\Log;
use App\Models\Tree\TreeSiteCondition;
use App\Models\Tree\TreeCharacteristic;

class TreeAssessmentCategoriesForm extends Component
{
    public $assessment;
    public $categories;
    public array $category;
    public array $categoryTitles;
    public string $currentCategory;
    public int $categoryIndex;
    public int $categoriesCount;
    public $sections;
    public $sectionTitle;
    public int $sectionIndex;
    public int $sectionsCount;
    public $sectionInputs = [];
    public $selectedValues = [];
    public $sectionsToComplete;
    public $inputType;
    public $reviewAssessmentModal = false;
    public $checkboxes = [
        'special value',
        'site character',
        'landscape',
        'growth obstructions',
        'soil problems',
        'obstructions',
        'use under tree',
        'exposer to wind',
        'prevailing wind direction',
        'common weather',
        'use under tree'
    ];
    public $toggles = [
        'twig dieback',
        'epicormics',
        'can target be moved?',
        'can target be restricted?',
        'pavement lifted',
        'target within',
    ];
//TODO: lots of refactoring and abstractions need to be made 
//TODO: make a method to get the category, section and form  properties
// TODO: make this controller reusable for all categories of the assessment
// TODO: add type column to the categories tables and seeders to identify the type of input using a numeric value

    public function mount(Request $request, $lastCategoryCompleted = null, $lastSectionCompleted = null)
    {
        $this->assessment   = Assessment::findOrFail($request->get('assessment'));
        $categories =  
            [
                'assessment_categories' => 
                    [
                        'characteristics'   => collect(TreeCharacteristic::toBase()->get())->groupBy('section')->toArray(),
                        'health'            => collect(TreeHealth::toBase()->get())->groupBy('section')->toArray(),
                        'site_conditions'   => collect(TreeSiteCondition::toBase()->get())->groupBy('section')->toArray(),
                        'targets'           => collect(TreeTarget::toBase()->get())->groupBy('section')->toArray(),
                    ]
            ];
        $this->categoryTitles   = array_keys($categories[key($categories)]);
        $this->categoriesCount    = count($this->categoryTitles) - 1;
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

        // $this->emitTo(AssessmentForm::class, 'setQueryString',$this->currentCategory, $this->sectionTitle);
        // $this->render();
    }

    public function updatedCategory($value)
    {
        dd($value);
    }

    public function setToggleVariable($toggleVariableId)
    {   
        settype($toggleVariableId, 'string');
       $this->selectedValues[$this->sectionTitle.$toggleVariableId] = $toggleVariableId;
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

        switch ($this->categoryIndex) {
            case $this->categoriesCount:
                $this->showModal();
                break;
            default:
                $this->goToNextCategory();
                break;
        }
    }

    public function showModal()
    {
        $this->reviewAssessmentModal = true;
    }

    public function render()
    {
        return view('livewire.trees.tree-assessment-categories-form');
    }
}