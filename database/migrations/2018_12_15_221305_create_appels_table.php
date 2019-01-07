<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appels', function (Blueprint $table) {
            $table->increments('id_appels');
            $table->DateTime('start_time');
            $table->DateTime('end_time');
            $table->integer('duree');
            $table->text('commentaire');
            $table->string('numero');
            $table->integer('nb_appel');
            $table->unsignedInteger('id_users');
            $table->foreign('id_users')->references('id_users')->on('users');
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
        Schema::dropIfExists('appels');
    }
}
