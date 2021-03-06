<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintainceitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintainceitems', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name',20);
            $table->integer('amount');
            $table->timestamps();
        });
      //  Schema::rename('maintainceitem','maintainceitems');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintainceitems');
    }
}
