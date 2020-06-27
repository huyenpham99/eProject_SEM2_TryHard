<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProgramDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_detail', function (Blueprint $table) {
            $table->id();
            $table->string("program_detail_name");
            $table->string("program_detail_image")->nullable();
            $table->string("program_detail_desc");
            $table->string("program_detail_content");
            $table->unsignedBigInteger("program_id");
            $table->foreign("program_id")->references("id")->on("program")->onDelete("cascade");
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
        Schema::dropIfExists('program_detail');
    }
}
