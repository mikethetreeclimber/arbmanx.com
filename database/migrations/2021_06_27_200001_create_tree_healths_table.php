<?php

use Database\Seeders\TreeHealthSeeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreeHealthsTable extends Migration
{
    public function up()
    {
        Schema::create('tree_healths', function (Blueprint $table) {
            $table->id();
            $table->string('section', 60);
            $table->string('value', 60);
        });
        $seeder = new TreeHealthSeeder;
        $seeder->run();
    }
    public function down()
    {
        Schema::dropIfExists('tree_healths');
    }
}
