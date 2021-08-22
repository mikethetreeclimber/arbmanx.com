<?php

use App\Models\User;
use App\Models\Tree\AssessedTree;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->foreignIdFor(AssessedTree::class, 'assessed_tree_id')->nullable();
            $table->foreignIdFor(User::class, 'assessor_id')->nullable();
            $table->integer('hazard_rating')->nullable();
            $table->json('uncomplete_sections')->nullable();
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