<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmEquipmentTable extends Migration
{
    public function up()
    {
        Schema::create('farm_equipment', function (Blueprint $table) {
            $table->increments('equipment_id');
            $table->string('equipment_name');
            $table->string('location');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('farm_equipment');
    }
}
