<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
                Schema::create('meeting', function (Blueprint $table) {
                        $table->increments('meeting_id');
                        $table->dateTime('start')->index();
                        $table->dateTime('end')->index()->nullable();
                        $table->unsignedInteger('duration_estimate')->nullable(); //minutes
                        //quick hack, no time to set up a ton of joins. just a location text field
                        $table->string('location',100);
                        //$table->unsignedInteger('location_id');
                        $table->timestamps();

                        //$table->foreign('location_id')->references('location_id')->on('location');
                });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
                Schema::drop('meeting');
        }

}
