<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAnalyticsTable extends Migration
{
    public function up()
    {
        Schema::create('data_analytics', function (Blueprint $table) {
            $table->increments('analysis_id');
            $table->string('analysis_type');
            $table->date('analysis_date');
            $table->text('result');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_analytics');
    }
}
