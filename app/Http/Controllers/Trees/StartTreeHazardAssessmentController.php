<?php

namespace App\Http\Controllers\Trees;

use App\Models\Tree\Assessment;
use App\Http\Controllers\Controller;

class StartTreeHazardAssessmentController extends Controller
{

    public function index()
    {
        dd('this is where all the assessments for the current user should be displayed');
    }

    public function create()
    {
        return redirect(route('trees.assessment.form'));
    }

    public function edit(Assessment $assessment)
    {
        dd($assessment);
    }
}