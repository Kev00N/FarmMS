<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialAnalysisTable extends Migration
{
    public function up()
    {
        Schema::create('financial_analysis', function (Blueprint $table) {
            $table->increments('analysis_id');
            $table->date('analysis_date');
            $table->string('expense_category');
            $table->float('expense_amount');
            $table->string('revenue_category');
            $table->float('revenue_amount');
            $table->float('profitability');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('financial_analysis');
    }
}
