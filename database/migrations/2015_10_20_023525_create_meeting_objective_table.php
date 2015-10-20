<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingObjectiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_objective', function (Blueprint $table) {
            $table->unsignedInteger('objective_id');
            $table->unsignedInteger('meeting_id');
            $table->dateTime('completed_at')->nullable();
            
            $table->primary(['objective_id','meeting_id']);
            $table->foreign('objective_id')->references('objective_id')->on('objective');
            $table->foreign('meeting_id')->references('meeting_id')->on('meeting');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('meeting_objective');
    }
}
