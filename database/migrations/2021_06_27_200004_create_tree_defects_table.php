<?php

use Database\Seeders\TreeDefectsSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreeDefectsTable extends Migration
{
    public function up()
    {
        Schema::create('tree_defects', function (Blueprint $table) {
            $table->id();
            $table->string('section', 60);
            $table->string('value', 60);
        });
        $seeder = new TreeDefectsSeeder;
        $seeder->run();
    }

    public function down()
    {
        Schema::dropIfExists('tree_defects');
    }
}