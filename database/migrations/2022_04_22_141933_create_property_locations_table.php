<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->unsignedBigInteger('location_id');

            $table->index('property_id', 'property_location_property_idx');
            $table->index('location_id', 'property_location_location_idx');
            $table->foreign('property_id', 'property_location_property_fk')->on('properties')->references('id');
            $table->foreign('location_id', 'property_location_location_fk')->on('locations')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_locations');
    }
}
