<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event', function (Blueprint $table) {
            $table->string("event_image", 200)->after("user_id");
            $table->string("slug", 100)->after("event_image")->nullable();
            $table->integer("status")->default(0)->after("event_image");
            $table->dropForeign(["banner_id"]);
            $table->dropColumn(["banner_id"]);
            $table->bigInteger("total_price")->after("event_image")->default(0);
            $table->bigInteger("total_people")->after("total_price")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event', function (Blueprint $table) {
            $table->dropColumn(["event_image"]);
            $table->dropColumn(["slug"]);
            $table->dropColumn(["status"]);
            $table->unsignedBigInteger("banner_id");
            $table->foreign("banner_id")->references("id")->on("banner")->onDelete("cascade");
            $table->dropColumn("total_price");
            $table->dropColumn("total_people");
        });
    }
}
