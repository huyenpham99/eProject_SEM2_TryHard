<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListDonate extends Model
{
    protected $table = "listdonate";
    protected $fillable = [
      "name",
        "sodienthoai",
        "email",
        "money",
        "donate_id",
    ];
}
