<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_users', function (Blueprint $table) {
            $table->increments('id');
             $table->string('name');
            //создание поля для связывания с таблицей user
            $table->integer('user_id')->unsigned()->default(1);
        //создание внешнего ключа для поля 'user_id', который связан с полем id таблицы 'users'
        $table->foreign('user_id')->references('id')->on('users');

            $table->integer('teams_id')->unsigned()->default(1);
        //создание внешнего ключа для поля 'user_id', который связан с полем id таблицы 'users'
        $table->foreign('teams_id')->references('id')->on('teams');
        $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_users');
    }
}
