<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_characteristics', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->longText('description');
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('ms_class_people')->cascadeOnDelete();
            $table->unsignedBigInteger('augury_id');
            $table->foreign('augury_id')->references('id')->on('ms_auguries')->cascadeOnDelete();
            $table->unsignedBigInteger('tribe_id');
            $table->foreign('tribe_id')->references('id')->on('ms_tribes')->cascadeOnDelete();
            $table->unsignedBigInteger('race_id');
            $table->foreign('race_id')->references('id')->on('ms_races')->cascadeOnDelete();
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
        Schema::dropIfExists('ms_characteristics');
    }
}
