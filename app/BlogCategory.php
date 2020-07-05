<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = "blogcategory";
    protected $fillable =
        ["blog_category_name"];
    public function Blogs(){
        return $this->hasMany("App\Blog"); // tra ve 1 collection
    }
    public function getRouteKeyName()
    {
        return "slug";
    }
    public function getBlogCategoryUrl(){
        return url("/blogcategory/{$this->__get("slug")}");
    }
}
