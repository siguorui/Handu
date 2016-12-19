<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
<<<<<<< HEAD
            $table->string('email')->unique();//不能重复unique
            $table->string('password');
            $table->string('pic');//头像
            $table->rememberToken();
            $table->integer('add_time');
            $table->integer('update_time');
=======
            $table->string('pic');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->integer('add_time');
            $table->integer('update_time');
<<<<<<< HEAD

=======
>>>>>>> origin/master
>>>>>>> origin/master
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
