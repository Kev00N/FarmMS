<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePestTrapsTable extends Migration
{
    public function up()
    {
        Schema::create('pest_traps', function (Blueprint $table) {
            $table->increments('trap_id');
            $table->string('location');
            $table->date('installation_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pest_traps');
    }
}
