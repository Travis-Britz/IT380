<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeIncidentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_incident', function (Blueprint $table) {
            $table->unsignedInteger('employee_id');
            $table->unsignedInteger('incident_id');
            
            $table->primary(['employee_id','incident_id']);
            $table->foreign('employee_id')->references('employee_id')->on('employee');
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
        Schema::drop('employee_incident');
    }
}
