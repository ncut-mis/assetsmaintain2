<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPrevilegeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userPrevileges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('u_id')->index();
            $table->integer('p_id')->index();
            $table->timestamps();
        });
       // Schema::rename('userPrevilege','userPrevileges');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userPrevileges');
    }
}
