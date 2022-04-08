<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemesTable extends Migration
{
    /**
     * Run the Memes migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            // https://laravel.com/docs/8.x/migrations#column-method-id
            $table->id();

            $table->string('name');
        });

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
    }

    /**
     * Reverse the Memes migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memes');
    }
}
