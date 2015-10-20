<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_content', function (Blueprint $table) {
            $table->unsignedInteger('meeting_id');
            $table->unsignedInteger('content_id');
            $table->dateTime('completed_at')->nullable();

            $table->primary(['meeting_id','content_id']);
            $table->foreign('meeting_id')->references('meeting_id')->on('meeting');
            $table->foreign('content_id')->references('content_id')->on('content');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('meeting_content');
    }
}
