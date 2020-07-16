<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $fillable = [
//        "product_id",
        "content",
        "comment_date",
        "comment_user",
        "comment_status",
        "blog_id",
    ];
//    public function product(){
//        return $this->belongsTo("App\Product","product_id");
//    }
    public function blog(){
        return $this->belongsTo("App\Blog","blog_id");
    }
}
