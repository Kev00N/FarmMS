<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseaseDetectionTable extends Migration
{
    public function up()
    {
        Schema::create('disease_detection', function (Blueprint $table) {
            $table->increments('detection_id');
            $table->unsignedInteger('crop_id');
            $table->foreign('crop_id')->references('crop_id')->on('crops');
            $table->string('disease_name');
            $table->date('detection_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('disease_detection');
    }
}
