<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessedTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessed_trees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained('users');
            $table->string('owned_by')->nullable();
            $table->foreignId('tree_id')->constrained('trees');
            $table->integer('dbh')->nullable();
            $table->integer('height')->nullable();
            $table->integer('spread')->nullable();
            $table->integer('number_of_trunks')->nullable();
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
        Schema::dropIfExists('assessed_trees');
    }
}