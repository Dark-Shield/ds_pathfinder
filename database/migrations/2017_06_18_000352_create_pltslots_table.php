<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePltslotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pltSlots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slotID');
            $table->integer('slotParentID');
            $table->integer('slotOrder');
            $table->string('slotTitle');
            $table->string('slotDesc');
            $table->string('slotRankReq');
            $table->integer('slotReqScore');
            $table->integer('slotReqQual');
            $table->integer('slotReqMedal');
            $table->integer('slotGroupID');
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
        Schema::dropIfExists('pltSlots');
    }
}
