<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentTreeTarget extends Migration
{

    public function up()
    {
        Schema::create('assessment_tree_target', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assessment_id')->constrained();
            $table->foreignId('tree_target_id')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assessment_tree_target');
    }
}