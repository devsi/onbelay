<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGearUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gear_user', function (Blueprint $table) {
            $table->integer('gear_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('quantity');

            // indexing
            $table->primary(['gear_id', 'user_id']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('gear_id')->references('id')->on('gear');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gear_user');
    }
}
