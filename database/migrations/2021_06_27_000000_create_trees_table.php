<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreesTable extends Migration
{
    public function up()
    {
        Schema::create('trees', function (Blueprint $table) {
            $table->id();
            $table->string('genus_name', 19);
            $table->string('species_name', 36);
            $table->string('common_name', 34);
            $table->string('growth_rate', 8);
            $table->string('height_at_maturity', 3);
        });
    }

    public function down()
    {
        Schema::dropIfExists('trees');
    }
}
