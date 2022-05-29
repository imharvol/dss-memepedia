<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTierListsTable extends Migration
{
    public function up()
    {
        Schema::create('tier_lists', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->timestamps();
        });

        Schema::create('meme_tier_list', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('meme_id');
            $table->foreign('meme_id')->references('id')->on('memes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->unsignedBigInteger('tier_list_id');
            $table->foreign('tier_list_id')->references('id')->on('tier_lists')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->unique(['meme_id', 'tier_list_id']);
        });

        Schema::create('tag_tier_list', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->unsignedBigInteger('tier_list_id');
            $table->foreign('tier_list_id')->references('id')->on('tier_lists')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->unique(['tag_id', 'tier_list_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('meme_tier_list');
        Schema::dropIfExists('tier_lists');
    }
}
