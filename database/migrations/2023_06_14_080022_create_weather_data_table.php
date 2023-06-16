<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherDataTable extends Migration
{
    public function up()
    {
        Schema::create('weather_data', function (Blueprint $table) {
            $table->timestamp('timestamp')->primary();
            $table->float('temperature');
            $table->float('humidity');
            $table->float('precipitation');
            $table->float('wind_speed');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('weather_data');
    }
}
