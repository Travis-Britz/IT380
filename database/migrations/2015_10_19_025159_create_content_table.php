<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
                Schema::create('content', function (Blueprint $table) {
                        $table->increments('content_id');
                        $table->unsignedInteger('cat_id');
                        $table->string('language', 2);
                        $table->text('media_url');
                        $table->unsignedInteger('estimated_duration'); //seconds
                        $table->enum('media_type', ['video', 'text', 'quiz', 'image','audio']);
                        $table->timestamps();
                        
                        $table->foreign('cat_id')->references('cat_id')->on('content_cat');
                });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
                Schema::drop('content');
        }

}
