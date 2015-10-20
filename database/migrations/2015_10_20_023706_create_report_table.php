<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->increments('report_id');
            $table->unsignedInteger('incident_id');
            $table->unsignedInteger('author');
            $table->text('text');
            $table->timestamps();
            
            $table->foreign('author')->references('employee_id')->on('employee');
            $table->foreign('incident_id')->references('incident_id')->on('incident');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('report');
    }
}
