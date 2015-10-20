<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeContentTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
                Schema::create('employee_content', function (Blueprint $table) {
                        $table->unsignedInteger('content_id');
                        $table->unsignedInteger('employee_id');
                        $table->timestamp('due_date');
                        $table->timestamp('completion_date')->nullable();

                        $table->primary(['content_id', 'employee_id']);
                        $table->foreign('content_id')->references('content_id')->on('content');
                        $table->foreign('employee_id')->references('employee_id')->on('employee');
                });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
                Schema::drop('employee_content');
        }

}
