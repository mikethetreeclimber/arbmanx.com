<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessedTreesLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('assessed_trees_locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assessed_tree_id')->constrained('assessed_trees');
            $table->tinyText('street_address');
            $table->tinyText('city');
            $table->tinyText('state');
            $table->integer('zip');
            $table->decimal('lat', 9, 7)->nullable();
            $table->decimal('lng', 9, 7)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('location');
    }
}