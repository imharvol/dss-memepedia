<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the Users migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // https://laravel.com/docs/8.x/migrations#column-method-id
            $table->id();

            $table->string('username')->unique();

            $table->string('name')->nullable();
            $table->string('surname')->nullable();

            $table->string('email')->unique();

            $table->string('password');

            // https://laravel.com/docs/8.x/migrations#column-method-rememberToken
            $table->rememberToken();

            // https://laravel.com/docs/8.x/migrations#column-method-timestamps
            $table->timestamps();

            $table->index('username');
        });
    }

    /**
     * Reverse the Users migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
