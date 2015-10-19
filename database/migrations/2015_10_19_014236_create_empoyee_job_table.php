<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpoyeeJobTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
                Schema::create('employee_job', function (Blueprint $table) {
                        $table->unsignedInteger('job_id')->references('job_id')->on('job');
                        $table->unsignedInteger('employee_id')->references('employee_id')->on('employee');
                        $table->date('start_date');
                        $table->date('end_date')->nullable();

                        $table->primary(['job_id', 'employee_id', 'start_date']);
                });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
                Schema::drop('employee_job');
        }

}
