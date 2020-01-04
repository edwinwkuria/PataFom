<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventOrganizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_organizers', function (Blueprint $table) {
            $table->bigIncrements('organizerId');
            $table->string('organizerName');
            $table->string('organizerEmail');
            $table->string('organizerEmail2');
            $table->integer('organizerPhone');
            $table->integer('organizerphone2');
            $table->string('password');
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
        Schema::dropIfExists('event_organizers');
    }
}
