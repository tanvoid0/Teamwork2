<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('time')->nullable();
            $table->string('title')->nullable();
            $table->string('type')->nullable();

            $table->bigInteger('team1')->unsigned()->index()->nullable();
            $table->foreign('team1')->references('id')->on('teams');

            $table->bigInteger('team2')->unsigned()->index()->nullable();
            $table->foreign('team2')->references('id')->on('teams');

            $table->bigInteger('winner')->unsigned()->index()->nullable();
            $table->foreign('winner')->references('id')->on('teams');

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
        Schema::dropIfExists('matches');
    }
}
