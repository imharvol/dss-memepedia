<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Evaluation', function (Blueprint $table) {
            $table->id();
            $table->dateTime('postDate');
            $table->string('comment', 300);
            $table->unsignedDouble('rating');
            //$table->foreignId('User_id')->constrained();
            //$table->foreignId('Meme_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Evaluation');
    }
}
