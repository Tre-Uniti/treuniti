<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BetaAccessForCreatoriStudenti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creatori_invites', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('email')->unique();
            $table->timestamps();
        });
        Schema::create('studenti_invites', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('email')->unique();
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
        Schema::drop('creatori_invites');
        Schema::drop('studenti_invites');
    }
}
