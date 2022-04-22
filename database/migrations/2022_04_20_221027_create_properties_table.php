<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('address');
            $table->string('zipcode');

            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('square');
            $table->float('price');
            $table->string('property_id');

            $table->integer('land');
            $table->integer('year');

            $table->text('features');
            $table->text('images');
            $table->text('planes');

            $table->string('video');

            $table->text('related_properties');

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
        Schema::dropIfExists('properties');
    }
}
