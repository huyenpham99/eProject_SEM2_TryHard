<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = "banner";
    public $fillable = [
        "banner_name",
        "banner_image",
        "banner_image2",
        "status",
        "thu_tu",
    ];
    public function Event(){
        return $this->hasMany("App\Event"); // tra ve 1 collection
    }
    public function getImage($i){
//        if(is_null($this->__get("banner_image"))){
//            return asset("media/default.jpg");
//        }
        return asset($this->__get($i));
    }
}
