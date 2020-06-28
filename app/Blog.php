<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blog";
    protected $fillable = [
      "blog_title","blog_desc","blog_content","view_count",
    ];
}
