<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorIntegrationTable extends Migration
{
    public function up()
    {
        Schema::create('sensor_integration', function (Blueprint $table) {
            $table->increments('sensor_integration_id');
            $table->unsignedInteger('integration_id');
            $table->foreign('integration_id')->references('integration_id')->on('third_party_integration');
            $table->unsignedInteger('sensor_id');
            $table->foreign('sensor_id')->references('sensor_id')->on('sensor_data');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sensor_integration');
    }
}
