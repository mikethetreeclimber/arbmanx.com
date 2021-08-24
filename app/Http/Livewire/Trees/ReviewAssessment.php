<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Tree\Assessment;

class ReviewAssessment extends Component
{
    public $assessment;
    public $characteristics;
    public $reviewAssessmentModal = false;
    protected $listeners = [
        'showModal'
    ];
    
    public function mount(Assessment $assessment)
    {
        $this->assessment = $assessment;
        $uncompleteSection = $this->assessment->uncomplete_sections;
        // dd(unserialize($uncompleteSection));
        // $this->characteristics = $assessment->with('characteristics')->where('id', $assessment->id)->first();
    }

    public function showModal()
    {
        $this->reviewAssessmentModal = true;
    }
    
    public function render()
    {
        return view('livewire.trees.review-assessment', ['assessment' =>  $this->assessment->with([
            'tree', 
            'characteristics', 
            'health', 
            'site_conditions', 
            'targets', 
            'defects', 
            'comments'])->first()]);
    }
}