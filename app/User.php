<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image','email','telephone','account_status','address','password','role',
    ];


//    protected $attributes = [
//        'role' => 2,
//        'account_status' => "Please give account access",
//    ];

    public const ADMIN_ROLE = 1;
    public const USER_ROLE = 0;
    public const MANAGER_ROLE1 = 2;
    public const MANAGER_ROLE2 = 3;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    public function getImage(){
//        if(is_null($this->__get("image"))){
//            return asset("media/default.jpg");
//        }
//        return asset($this->__get("image"));
//    }
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function Event(){
        return $this->hasMany("App\Event"); // tra ve 1 collection
    }

}
