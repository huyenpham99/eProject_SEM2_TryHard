<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = "tickets";
    public $fillable = [
        "ticket_name",
        "ticket_type",
        "ticket_price",
        "ticket_code",
        "user_id",
    ];
    public function User()
    {
        return $this->belongsTo("\App\User", "user_id");
    }
    public function getTicketUrl(){
        return url("/ticket/{$this->__get("slug")}");
    }

}
