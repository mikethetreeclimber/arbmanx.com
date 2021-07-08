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
            $table->string('type', 60);
            $table->string('name', 60);
        });
        $seeder = new TreeCharacteristicsSeeder;
        $seeder->run();
    }
    public function down()
    {
        Schema::dropIfExists('tree_characteristics');
    }
}
