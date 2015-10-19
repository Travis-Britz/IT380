<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
                Schema::create('job', function (Blueprint $table) {
                        $table->increments('job_id');
                        $table->Text('job_description');
                        $table->string('job_title', 100);
                });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
                Schema::drop('job');
        }

}
