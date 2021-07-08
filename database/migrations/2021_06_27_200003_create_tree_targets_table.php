<?php

use Database\Seeders\TreeTargetsSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreeTargetsTable extends Migration
{
    public function up()
    {
        Schema::create('tree_targets', function (Blueprint $table) {
            $table->id();
            $table->string('type', 60);
            $table->string('name', 60);
        });
        $seeder = new TreeTargetsSeeder;
        $seeder->run();
    }

    public function down()
    {
        Schema::dropIfExists('tree_targets');
    }
}