<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Meme', function (Blueprint $table) {
            $table->foreignId('id')->constrained();
            $table->foreignId('name')->constrained();
            $table->foreignId('description')->constrained();
            $table->foreignId('author')->constrained();
            $table->date('creationDate');
            $table->string('article', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Meme');
    }
}
