<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoleAndPermission;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//    public function getRoleAttribute() {
////        $query= \DB::table("role_user")->where("role_user.user_id","=",$this->id)
////        ->join('roles', 'role_user.role_id', '=', 'roles.id')->pluck("roles.name");
////        return $query[1]["name"];
//        return "admin";
//    }


    public function getId()
    {
        return $this->id;
    }
}
