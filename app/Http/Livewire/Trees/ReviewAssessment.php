<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Tree\Assessment;

class ReviewAssessment extends Component
{
    public $assessment;
    public $reviewAssessmentModal = false;
    protected $listeners = [
        'showModal'
    ];
    
    public function mount(Assessment $assessment)
    {
        $this->assessment = $assessment;
        $this->assessment->with([
            'tree', 
            'characteristics', 
            'health', 
            'site_conditions', 
            'targets', 
            'defects', 
            'comments'])->get();
    }

    public function showModal()
    {
        $this->reviewAssessmentModal = true;
    }
    
    public function render()
    {
        return view('livewire.trees.review-assessment');
    }
}