<?php

use Database\Seeders\TreeCharacteristicsSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreeCharacteristicsTable extends Migration
{
    public function up()
    {
        Schema::create('tree_characteristics', function (Blueprint $table) {
            $table->id();
            $table->string('section', 60);
            $table->string('value', 60);
        });
        $seeder = new TreeCharacteristicsSeeder;
        $seeder->run();
    }
    public function down()
    {
        Schema::dropIfExists('tree_characteristics');
    }
}