<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPasswordTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
                Schema::create('user_password', function (Blueprint $table) {
                        $table->unsignedInteger('user_id');
                        $table->string('password', 255);
                        $table->timestamp('created_at');
                        
                        $table->primary(['user_id', 'password']);
                        $table->foreign('user_id')->references('id')->on('users');
                });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
                Schema::drop('user_password');
        }

}
