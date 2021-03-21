<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    public function member(){
        return $this->hasMany('App\StudentMember');
    }

    public function interests(){
        return $this->hasMany(InterestGroup::class , 'user_id');
    }

    public function students(){
        return $this->hasOne(StudentMember::class , 'user_id');
    }


}
