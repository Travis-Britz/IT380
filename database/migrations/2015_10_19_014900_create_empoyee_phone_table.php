<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpoyeePhoneTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
                Schema::create('employee_phone', function (Blueprint $table) {
                        $table->unsignedInteger('employee_id')->references('employee_id')->on('employee');
                        $table->string('phone_number', 25); //some international numbers are weird.    
                        $table->enum('phone_type', ['mobile', 'landline']);
                        $table->enum('phone_category', ['personal', 'work', 'business', 'fax']);
                        $table->primary(['employee_id','phone_number']);
                });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
                Schema::drop('employee_phone');
        }

}
