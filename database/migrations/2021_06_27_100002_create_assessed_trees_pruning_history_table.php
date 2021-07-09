<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessedTreesPruningHistoryTable extends Migration
{
    public function up()
    {
        Schema::create('assessed_trees_pruning_history', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assessed_tree_id')->constrained('assessed_trees');
            $table->foreignId('pruning_recommended_by_id')->nullable()->constrained('users');
            $table->foreignId('pruner_id')->nullable()->constrained('users');
            $table->string('pruning_recommended_by')->nullable();
            $table->string('pruned_by')->nullable();
            $table->string('pruning_type');
            $table->string('pruning_quality');
            $table->string('result_of_pruning');
            $table->timestamp('last_pruned_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pruning_history');
    }
}