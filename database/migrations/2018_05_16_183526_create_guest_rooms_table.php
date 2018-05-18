<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests_rooms', function (Blueprint $table) {

            //Columns

            $table->increments('id');
            $table->unsignedInteger('room_id');
            $table->unsignedInteger('guest_id');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->timestamps();

            //FK (Revisar)!!
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('guest_id')->references('id')->on('guests');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guest_rooms');
    }
}
