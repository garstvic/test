<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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
    
    public function loyalty() {
        return $this->hasOne('App\UserLoyalty');
    }
    
    public function addresses() {
        return $this->hasMany('App\UserAddress');
    }
    
    public function payments() {
        return $this->hasMany('App\UserPayment');
    }
}
