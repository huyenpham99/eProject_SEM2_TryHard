<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramCategory extends Model
{
    protected $table = "programcategory";
    public $fillable = [
        "progam_category_name",
        "program_category_image"
    ];

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function Program(){
        return $this->hasMany("App\Program"); // tra ve 1 collection
    }
    public function getProgramCategoryUrl(){
        return url("/programcategory/{$this->__get("slug")}");
    }
    public function getImage(){
        if(is_null($this->__get("program_category_image"))){
            return asset("media/default.jpg");
        }
        return asset($this->__get("program_category_image"));
    }
}
