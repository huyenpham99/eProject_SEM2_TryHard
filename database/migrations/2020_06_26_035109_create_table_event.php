<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string("event_name");
            $table->dateTime("event_date_start");
            $table->string("event_date_end");
            $table->integer("event_people_count");
            $table->string("event_address");
            $table->string("event_content");
            $table->string("event_desc");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("banner_id");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("banner_id")->references("id")->on("banner")->onDelete("cascade");
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
        Schema::dropIfExists('event');
    }
}
