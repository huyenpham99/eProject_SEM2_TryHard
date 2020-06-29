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
    public function User(){
        return $this->hasMany("App\User"); // tra ve 1 collection
    }

}
