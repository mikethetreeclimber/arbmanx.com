<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentTreeDefect extends Migration
{
    public function up()
    {
        Schema::create('assessment_tree_defect', function (Blueprint $table) {
            $table->primary(['assessment_id', 'tree_defect_id'], 'id');
            $table->foreignId('assessment_id')->constrained()->cascadeOnDelete();
            $table->foreignId('tree_defect_id')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assessment_tree_defect');
    }
}