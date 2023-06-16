<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentIntegrationTable extends Migration
{
    public function up()
    {
        Schema::create('equipment_integration', function (Blueprint $table) {
            $table->increments('equipment_integration_id');
            $table->unsignedInteger('integration_id');
            $table->foreign('integration_id')->references('integration_id')->on('third_party_integration');
            $table->unsignedInteger('equipment_id');
            $table->foreign('equipment_id')->references('equipment_id')->on('farm_equipment');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipment_integration');
    }
}
