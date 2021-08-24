<?php

namespace App\Http\Controllers\Trees;

use Illuminate\Http\Request;
use App\Models\Tree\Assessment;
use App\Models\Tree\TreeDefect;
use App\Models\Tree\TreeHealth;
use App\Models\Tree\TreeTarget;
use App\Http\Controllers\Controller;
use App\Models\Tree\TreeSiteCondition;
use App\Models\Tree\TreeCharacteristic;

class TreeAssessmentEvaluationController extends Controller
{
    public function Characteristics(TreeCharacteristic $treeCharacteristic, Assessment $assessment)
    {
        redirect()->route('trees.assessment.evaluation.characteristics.form', compact('assessment', 'characteristics'));
    }

    public function health(TreeHealth $treeHealth)
    {
        dd($treeHealth->all());
    }

    public function siteConditions(TreeSiteCondition $treeSiteCondition)
    {
        dd($treeSiteCondition->all());
    }

    public function defects(TreeDefect $treeDefect)
    {
        dd($treeDefect->all());
    }

    public function targets(TreeTarget $treeTarget)
    {
        dd($treeTarget->all());
    }
}