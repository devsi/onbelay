<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDisciplinesUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discipline_user', function (Blueprint $table) {
            $table->integer('discipline_id')->unsigned();
            $table->integer('user_id')->unsigned();

            // indexing
            $table->primary(['discipline_id', 'user_id']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('discipline_id')->references('id')->on('disciplines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discipline_user');
    }
}
