<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $table = "program";
    public $fillable = [
        "program_name",
        "user_id"
    ];
    public function getProgramUrl(){
        return url("/program/{$this->__get("slug")}");
    }
    public function User(){
        return $this->belongsTo("\App\User", "user_id");
    }
    public function ProgramDetail(){
        return $this->hasMany("App\ProgramDetail"); // tra ve 1 collection
    }
}
