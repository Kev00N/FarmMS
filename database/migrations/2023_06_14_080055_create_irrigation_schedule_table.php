<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIrrigationScheduleTable extends Migration
{
    public function up()
    {
        Schema::create('irrigation_schedule', function (Blueprint $table) {
            $table->increments('schedule_id');
            $table->unsignedInteger('crop_id');
            $table->foreign('crop_id')->references('crop_id')->on('crops');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('duration');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('irrigation_schedule');
    }
}
