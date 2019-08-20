<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('eventname');
            $table->string('eventlocation');
            $table->integer('eventcost');
            $table->string('eventtime')->nullable();
            $table->string('eventdate')->nullable();
            $table->string('eventseats');
            $table->string('eventdescription');
            $table->string('eventorganizer');
            $table->string('eventcontactemail');
            $table->string('eventcontactphone');
            $table->integer('photo_id')->nullable();
            $table->foreign('photo_id')->references('Photoid')->on('eventphotos');
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
        Schema::dropIfExists('events');
    }
}
