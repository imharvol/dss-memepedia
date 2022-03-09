<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddedUserAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nick');
            $table->string('surname');
<<<<<<< HEAD
            $table->date('registerDate');
=======
>>>>>>> master
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::table('users', function (Blueprint $table) {
            Schema::dropIfExists('users');
        });
=======
        // Antes de droppear la tabla users debemos droppear memes y evaluations ya que estas tienen claves ajenas a la tabla users
        Schema::dropIfExists('evaluations');
        Schema::dropIfExists('memes');

        Schema::dropIfExists('users');
>>>>>>> master
    }
}
