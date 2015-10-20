<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_category', function (Blueprint $table) {
            $table->unsignedInteger('cat_id');
            $table->unsignedInteger('meeting_id');
            
            $table->primary(['cat_id','meeting_id']);
            $table->foreign('cat_id')->references('cat_id')->on('meeting_cat');
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
        Schema::drop('meeting_category');
    }
}
