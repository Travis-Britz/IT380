<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
                Schema::create('employee', function (Blueprint $table) {
                        $table->increments('employee_id');
                        $table->unsignedInteger('supervisor_id')->index();
                        $table->unsignedInteger('user_id')->unique()->references('id')->on('users');
                        $table->string('ssn', 11);
                        $table->string('firstname', 50);
                        $table->string('lastname', 50);
                        
                        $table->foreign('supervisor_id')->references('employee_id')->on('employee');
                });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
                Schema::drop('employee');
        }

}
