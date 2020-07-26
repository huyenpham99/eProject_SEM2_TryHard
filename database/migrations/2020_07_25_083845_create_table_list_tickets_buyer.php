<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableListTicketsBuyer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_tickets', function (Blueprint $table) {
            $table->id();
            $table->string("buyer_name")->nullable();
            $table->string("buyer_number")->nullable();
            $table->string("buyer_address")->nullable();
            $table->string("buyer_ticket_code");
            $table->string("buyer_email");
            $table->unsignedBigInteger("ticket_id");
            $table->foreign("ticket_id")->references("id")->on("tickets");
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
        Schema::dropIfExists('buy_tickets');
    }
}
