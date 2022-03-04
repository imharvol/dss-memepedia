<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('post_date');
            $table->string('comment', 300);
            $table->unsignedDouble('rating');

            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users');

            $table->unsignedBigInteger('meme_id');
            $table->foreign('meme_id')->references('id')->on('memes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluations');
    }
}
