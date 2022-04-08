<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            // https://laravel.com/docs/8.x/migrations#column-method-id
            $table->id();

            $table->string('comment')->nullable();
            $table->float('rating');

            // https://laravel.com/docs/8.x/migrations#foreign-key-constraints
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            // https://laravel.com/docs/8.x/migrations#foreign-key-constraints
            $table->unsignedBigInteger('meme_id');
            $table->foreign('meme_id')->references('id')->on('memes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evaluations');
    }
}
