<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAdvertisement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement', function (Blueprint $table) {
            $table->id();
            $table->string("ad_name");
            $table->string("ad_image");
            $table->string("ad_content");
            $table->string("ad_image1")->nullable();
            $table->date("ad_time");
            $table->string("ad_image2")->nullable();
            $table->string("ad_image3")->nullable();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("banner_id");
            $table->foreign("user_id")->references("id")->on("user");
            $table->foreign("banner_id")->references("id")->on("banner");
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
        Schema::dropIfExists('advertisement');
    }
}
