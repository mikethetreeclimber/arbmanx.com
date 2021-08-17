<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assessed_tree_id')->nullable()->constrained('assessed_trees');
            $table->foreignId('assessor_id')->nullable()->constrained('users');
            $table->integer('hazard_rating')->nullable();
            $table->string('last_category_completed')->default('start');
            $table->json('sections_to_complete')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessments');
    }
}