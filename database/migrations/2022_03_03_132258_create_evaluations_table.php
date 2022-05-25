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

        Schema::create('tierLists', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('visits');
        });

        Schema::create('tier_memes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('meme_id');
            $table->foreign('meme_id')->references('id')->on('memes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            
            $table->unsignedBigInteger('tier_id');
            $table->foreign('tier_id')->references('id')->on('tierLists')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->unique(['meme_id', 'tier_id']);
        });

        Schema::create('news', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('contents');
            $table->date('date');

            // https://laravel.com/docs/8.x/migrations#foreign-key-constraints
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evaluations');
        Schema::dropIfExists('news');
        Schema::dropIfExists('tier_has_memes');
        Schema::dropIfExists('tierLists');
    }
}
