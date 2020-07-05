<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blog";
    protected $fillable = [
      "blog_title","blog_image","blog_desc","blog_date","blog_content","view_count","blog_category_id",
    ];
    public function getBlogUrl(){
        return url("/blog/{$this->__get("slug")}");
    }
    public function getSlug(){
        return $this->__get("slug");
    }
    public function BlogCategory(){
        return $this->belongsTo("\App\BlogCategory", "blog_category_id");
    }
}
