<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJourneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journeys', function (Blueprint $table) {
            $table->id();
            $table->string('country', 50);
            $table->string('region', 50);
            $table->string('city', 50);
            $table->string('location',100);
            $table->date('date_start');
            $table->smallInteger('duration');
            $table->string('placement', 255);
            $table->string('service',255);
            $table->text('description');
            $table->boolean('available')->nullable();
            $table->float('price',8,2)->unsigned();
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
        Schema::dropIfExists('journeys');
    }
}
