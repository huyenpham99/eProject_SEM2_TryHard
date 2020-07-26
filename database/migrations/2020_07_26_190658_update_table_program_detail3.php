<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableProgramDetail3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('program_detail', function (Blueprint $table) {
            $table->integer("view_count")->after("program_detail_desc")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('program_detail', function (Blueprint $table) {
            $table->dropColumn(["view_count"]);
        });
    }
}
