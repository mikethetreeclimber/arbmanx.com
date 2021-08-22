<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentTreeHealth extends Migration
{

    public function up()
    {
        Schema::create('assessment_tree_health', function (Blueprint $table) {
            $table->primary(['assessment_id', 'tree_health_id'], 'id');
            $table->foreignId('assessment_id')->constrained()->cascadeOnDelete();
            $table->foreignId('tree_health_id')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assessment_tree_health');
    }
}