<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_category', function (Blueprint $table) {
            $table->unsignedInteger('report_id');
            $table->unsignedInteger('cat_id');
            
            $table->primary(['report_id','cat_id']);
            $table->foreign('report_id')->references('report_id')->on('report');
            $table->foreign('cat_id')->references('cat_id')->on('report_cat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('report_category');
    }
}
