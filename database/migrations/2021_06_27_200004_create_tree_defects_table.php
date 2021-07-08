<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreeDefectsTable extends Migration
{
    public function up()
    {
        Schema::create('tree_defects', function (Blueprint $table) {
            $table->id();
            $table->string('type', 60);
            $table->string('name', 60);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tree_defects');
    }
}
