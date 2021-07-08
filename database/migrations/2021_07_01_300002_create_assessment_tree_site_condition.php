<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentTreeSiteCondition extends Migration
{

    public function up()
    {
        Schema::create('assessment_tree_site_condition', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assessment_id')->constrained();
            $table->foreignId('tree_site_condition_id')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assessment_tree_site_condition');
    }
}
