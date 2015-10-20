<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incident_category', function (Blueprint $table) {
            $table->unsignedInteger('cat_id');
            $table->unsignedInteger('incident_id');
            
            $table->primary(['cat_id','incident_id']);
            $table->foreign('cat_id')->references('cat_id')->on('incident_cat');
            $table->foreign('incident_id')->references('incident_id')->on('incident');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('incident_category');
    }
}
