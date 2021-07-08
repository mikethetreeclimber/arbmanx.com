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
            $table->string('type', 60);
            $table->string('name', 60);
        });
        $seeder = new TreeSiteConditionsSeeder;
        $seeder->run();
    }
    public function down()
    {
        Schema::dropIfExists('tree_site_conditions');
    }
}
