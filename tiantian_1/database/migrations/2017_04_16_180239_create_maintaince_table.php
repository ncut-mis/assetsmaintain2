<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintainceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintaince', function (Blueprint $table) {
            $table->increments('m_id');
            $table->integer('a_id');
            $table->integer('v_id');
            $table->integer('mitems_id');
            $table->date('date');
            $table->string('status',20);
            $table->string('method',20);
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('maintaince');
    }
}
