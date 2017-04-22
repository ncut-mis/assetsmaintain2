<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('cantactperson',25);
            $table->string('phone',20);
            $table->string('address',100);
            $table->string('bankname',50)->nullable();
            $table->string('bankaccount',20)->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
        });
       // Schema::rename('vendor','vendors');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
