<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingAttendeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_attendee', function (Blueprint $table) {
            $table->unsignedInteger('meeting_id');
            $table->unsignedInteger('employee_id');
            $table->boolean('attended');
            
            $table->primary(['meeting_id','employee_id']);
            $table->foreign('meeting_id')->references('meeting_id')->on('meeting');
            $table->foreign('employee_id')->references('employee_id')->on('employee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('meeting_attendee');
    }
}
