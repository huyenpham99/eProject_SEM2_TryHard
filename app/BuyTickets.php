<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyTickets extends Model
{
    protected $table = "buy_tickets";
    public $fillable = [
        "buyer_name",
        "buyer_number",
        "buyer_address",
        "buyer_email",
        "ticket_id",
        "buyer_ticket_code",
    ];
    public function User()
    {
        return $this->belongsTo("\App\User", "user_id");
    }
    public function getBuyTicketUrl(){
        return url("/ticket/{$this->__get("slug")}");
    }
}
