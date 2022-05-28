<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemesTable extends Migration
{
    public function up()
    {
        Schema::create('memes', function (Blueprint $table) {
            // https://laravel.com/docs/8.x/migrations#column-method-id
            $table->id();

            $table->string('name');
            $table->text('description');

            // https://laravel.com/docs/8.x/migrations#foreign-key-constraints
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {
            // https://laravel.com/docs/8.x/migrations#column-method-id
            $table->id();

            $table->string('name');
        });

        // https://laravel.com/docs/8.x/eloquent-relationships#many-to-many
        Schema::create('meme_tag', function (Blueprint $table) {
            // https://laravel.com/docs/8.x/migrations#foreign-key-constraints
            $table->unsignedBigInteger('meme_id');
            $table->foreign('meme_id')->references('id')->on('memes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            // https://laravel.com/docs/8.x/migrations#foreign-key-constraints
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->unique(['meme_id', 'tag_id']);
        });

        // https://laravel.com/docs/8.x/eloquent-relationships#many-to-many
        Schema::create('likes', function (Blueprint $table) {
            $table->id();

            // https://laravel.com/docs/8.x/migrations#foreign-key-constraints
            $table->unsignedBigInteger('meme_id');
            $table->foreign('meme_id')->references('id')->on('memes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            // https://laravel.com/docs/8.x/migrations#foreign-key-constraints
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->timestamps();

            $table->unique(['meme_id', 'author_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('likes');
        Schema::dropIfExists('meme_tag');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('memes');
    }
}
