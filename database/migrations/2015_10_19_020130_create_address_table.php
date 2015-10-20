<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
                Schema::create('address', function (Blueprint $table) {
                        $table->increments('address_id');
                        $table->string('address', 255);
                        $table->string('city', 255);
                        $table->string('state', 20);
                        $table->string('state_code', 2);
                        $table->string('zipcode', 5);
                });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
                Schema::drop('address');
        }

}
