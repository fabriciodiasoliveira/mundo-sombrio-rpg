<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_posts', function (Blueprint $table) {
            $table->id();
            $table->text('post');
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')->references('id')->on('ms_games')->cascadeOnDelete();;
            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')->references('id')->on('ms_characters')->cascadeOnDelete();;
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
        Schema::dropIfExists('ms_posts');
    }
}
