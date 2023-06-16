<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThirdPartyIntegrationTable extends Migration
{
    public function up()
    {
        Schema::create('third_party_integration', function (Blueprint $table) {
            $table->increments('integration_id');
            $table->string('integration_name');
            $table->string('integration_type');
            $table->string('integration_key');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('third_party_integration');
    }
}
