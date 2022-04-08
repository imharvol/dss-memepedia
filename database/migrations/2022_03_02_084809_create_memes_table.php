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
            $table->string('description');

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
        });
    }

    public function down()
    {
        Schema::dropIfExists('memes');
    }
}
