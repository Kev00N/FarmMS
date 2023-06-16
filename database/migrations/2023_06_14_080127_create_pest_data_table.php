<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePestDataTable extends Migration
{
    public function up()
    {
        Schema::create('pest_data', function (Blueprint $table) {
            $table->increments('data_id');
            $table->unsignedInteger('trap_id');
            $table->foreign('trap_id')->references('trap_id')->on('pest_traps');
            $table->string('pest_name');
            $table->integer('count');
            $table->timestamp('timestamp');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pest_data');
    }
}
