<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program_Detail extends Model
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
    public function getProgramUrl(){
        return url("/program/{$this->__get("slug")}");
    }
    public function Program(){
        return $this->belongsTo("\App\Program", "program_id");
    }
}
