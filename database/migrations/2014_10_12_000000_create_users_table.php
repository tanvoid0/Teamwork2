<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('gender')->default('Male');
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('phone')->nullable();
            $table->string('messenger')->nullable();
            $table->string('address')->nullable();

            $table->string('lolid')->nullable()->unique();
            $table->string('lane1')->nullable();
            $table->string('lane2')->nullable();

            $table->boolean('ban')->nullable();
            $table->string('role')->default('player');

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique()->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->double('payment')->nullable();
            $table->boolean('payment_confirmed')->nullable();
            $table->timestamps();
        });
        Schema::create('team_players', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('role')->default('player')->nullable();
            $table->string('lane')->nullable();

            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->bigInteger('team_id')->unsigned()->index()->nullable();
            $table->foreign('team_id')->references('id')->on('teams');
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('teams');
        Schema::dropIfExists('team_players');

    }
}
