<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Validator;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image','email','telephone','account_status','address','password','role','provider', 'provider_id'
    ];


//    protected $attributes = [
//        'role' => 2,
//        'account_status' => "Please give account access",
//    ];

    public const ADMIN_ROLE = 1;
    public const USER_ROLE = 0;
    public const BLOG_ADMIN_ROLE = 2;
    public const EVENT_ADMIN_ROLE = 3;
    public const PRODUCT_ADMIN_ROLE = 4;
    public const PROGRAM_ADMIN_ROLE = 5;
    public const DEAD_ACTIVE = 6;


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

    public function Program(){
        return $this->hasMany("App\Program"); // tra ve 1 collection
    }

    public function Event(){
        return $this->hasMany("App\Event"); // tra ve 1 collection
    }
    public function Ticket(){
        return $this->hasMany("App\Ticket"); // tra ve 1 collection
    }
    public function admin_credential_rules(array $data)
    {
        $messages = [
            'current-password.required' => 'Please enter current password',
            'password.required' => 'Please enter password',
        ];

        $validator = Validator::make($data, [
            'current-password' => 'required',
            'password' => 'required|same:password',
            'password_confirmation' => 'required|same:password',
        ], $messages);

        return $validator;
    }
    public function Donate(){
        $this->hasMany(Donate::class);
    }

}
