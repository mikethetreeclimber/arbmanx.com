<?php

use Database\Seeders\TreeSiteConditionsSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreeSiteConditionsTable extends Migration
{
    public function up()
    {
        Schema::create('tree_site_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('section', 60);
            $table->string('value', 60);
        });
        $seeder = new TreeSiteConditionsSeeder;
        $seeder->run();
    }
    public function down()
    {
        Schema::dropIfExists('tree_site_conditions');
    }
}
