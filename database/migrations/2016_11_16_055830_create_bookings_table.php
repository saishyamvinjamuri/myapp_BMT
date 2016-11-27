<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //table which is used to save slots of users
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->date('bookedon');
            $table->time('bookedfrom');
            $table->time('bookedtill');
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
        //
    }
}
