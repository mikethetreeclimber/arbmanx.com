<?php

namespace App\Http\Livewire\Trees;

use Livewire\Component;
use App\Models\Tree\Tree;
use App\Models\Tree\AssessedTree;
use App\Models\Tree\Assessment;
use Error;
use Exception;

class AssessmentForm extends Component
{
    public $category;
    public $assessment;
    public $treeDetails;
    public $owner_id;
    public $tree_id;
    public $dbh;
    public $height;
    public $spread;
    public $numberOfTrunks;
    protected $listeners = ['treeSpeciesAdded', 'attachValuesAndProcced'];

    public function mount()
    {
        $this->category = 'tree_details';
        $this->assessment = new Assessment;
    }

    public function attachValuesAndProcced($category, $currentCategorySelectedIds)
    {
        try {
            collect($currentCategorySelectedIds)
            ->flatten()
            ->map(function ($currentCategorySelectedIds) {
            $this->assessment->{$this->category}()->attach($currentCategorySelectedIds);
            });

            session()->flash('success', 'The Tree\'s '.ucwords($this->category).' were successfully added to the Hazard Assessment');
            $this->category = $category;
        }
        catch (Exception $e) {
            return session()->flash('error', $e->getMessage());
        }
        catch (Error $err) {
            return session()->flash('error', 'Opps something went wrong!');
        } finally {
            redirect()->back();
        }
    }

    public function treeSpeciesAdded(Tree $tree)
    {
        $this->tree_id = $tree->id;
        $this->category = 'height_dbh';
    }

    public function createAssessedTreeDetails()
    {
        $assessedTree = AssessedTree::create([
                'owner_id' => 1,
                'tree_id' =>  $this->tree_id,
                'dbh' => $this->dbh,
                'height' => $this->height,
                'spread' => $this->spread,
                'number_of_trunks' => $this->numberOfTrunks
        ]);
        $assessedTree->save();

        $this->assessment = Assessment::create([
                'assessed_tree_id' => $assessedTree->id,
                'assessor_id' => auth()->id(),
                'last_section_completed' => 'tree_details'
        ]);
        $this->assessment->save();

        $this->category = 'characteristics';
        session()->flash('success', 'The tree details were successfully added to the Hazard Assessment');

    }

    public function render()
    {
        return view('livewire.trees.assessment-form');
    }
}