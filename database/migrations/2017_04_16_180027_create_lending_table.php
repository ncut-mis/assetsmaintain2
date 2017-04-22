<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLendingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lendings', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('u_id')->index();
            $table->integer('a_id')->index();
            $table->dateTime('lenttime');
            $table->dateTime('returntime')->nullable();
            $table->timestamps();
        });
      //  Schema::rename('lending','lendings');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lendings');
    }
}
