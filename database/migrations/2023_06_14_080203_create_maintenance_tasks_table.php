<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceTasksTable extends Migration
{
    public function up()
    {
        Schema::create('maintenance_tasks', function (Blueprint $table) {
            $table->increments('task_id');
            $table->unsignedInteger('equipment_id');
            $table->foreign('equipment_id')->references('equipment_id')->on('farm_equipment');
            $table->text('task_description');
            $table->date('due_date');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('maintenance_tasks');
    }
}
