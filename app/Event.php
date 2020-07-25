<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "event";
    public $fillable = [
        "event_name",
        "event_date_start",
        "event_date_end",
        "event_people_count",
        "event_address",
        "event_content",
        "event_desc",
        "user_id",
        "banner_id",
    ];
    public function getImage(){
        if(is_null($this->__get("event_image"))){
            return asset("media/default.jpg");
        }
        return asset($this->__get("event_image"));
    }
    public function Banner(){
        return $this->belongsTo("\App\Banner", "banner_id");
    }
    public function User(){
        return $this->belongsTo("\App\User", "user_id");
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function getEventUrl(){
        return url("/event/{$this->__get("slug")}");
    }

}
