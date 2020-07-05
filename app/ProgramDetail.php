<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramDetail extends Model
{
    //
    protected $table = "program_detail";
    public $fillable = [
        "program_detail_name",
        "program_detail_image",
        "program_detail_desc",
        "program_detail_content",
        "program_id"
    ];
    public function getProgramDetailUrl(){
        return url("/program-detail/{$this->__get("slug")}");
    }
    public function Program(){
        return $this->belongsTo("\App\Program", "program_id");
    }
    public function getImage(){
        if(is_null($this->__get("program_detail_image"))){
            return asset("media/default.jpg");
        }
        return asset($this->__get("program_detail_image"));
    }
}
