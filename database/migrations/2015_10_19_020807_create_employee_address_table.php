<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeAddressTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
                Schema::create('employee_address', function (Blueprint $table) {
                        $table->unsignedInteger('address_id');
                        $table->unsignedInteger('employee_id');
                        $table->enum('type', ['home', 'work']);

                        $table->primary(['address_id', 'employee_id']);
                        $table->foreign('address_id')->references('address_id')->on('address');
                        $table->foreign('employee_id')->references('employee_id')->on('employee');
                });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
                Schema::drop('employee_address');
        }

}
