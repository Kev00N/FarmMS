<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourceUsageTable extends Migration
{
    public function up()
    {
        Schema::create('resource_usage', function (Blueprint $table) {
            $table->increments('usage_id');
            $table->unsignedInteger('equipment_id');
            $table->foreign('equipment_id')->references('equipment_id')->on('farm_equipment');
            $table->string('resource_type');
            $table->float('usage_value');
            $table->timestamp('timestamp');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resource_usage');
    }
}
