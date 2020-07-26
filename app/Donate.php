<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $table = "donates";
    protected $fillable = [
      'donate_title',
        'donate_image',
        'donate_desc',
        'donate_content',
        'raisermoney',
        'start_at',
        'end_at',
        'goalmoney',
        'user_id',
    ];
    public function User(){
        $this->hasMany(User::class);
    }
    public function getDonateUrl(){
        return url("/donate/{$this->__get("slug")}");
    }
    public function getSlug(){
        return $this->__get("slug");
    }
}
