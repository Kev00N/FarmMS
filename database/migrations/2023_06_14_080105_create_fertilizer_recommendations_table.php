<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFertilizerRecommendationsTable extends Migration
{
    public function up()
    {
        Schema::create('fertilizer_recommendations', function (Blueprint $table) {
            $table->increments('recommendation_id');
            $table->unsignedInteger('crop_id');
            $table->foreign('crop_id')->references('crop_id')->on('crops');
            $table->string('fertilizer_type');
            $table->text('recommendation_text');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fertilizer_recommendations');
    }
}
