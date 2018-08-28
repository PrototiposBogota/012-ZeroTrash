<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoveltyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novelty', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_novelty_type')->unsigned();
            $table->foreign('id_novelty_type')->references('id')->on('novelty_type');
            $table->string('novelty');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->integer('id_car')->unsigned();
            $table->foreign('id_car')->references('id')->on('cars');
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
        Schema::dropIfExists('novelty');
    }
}
