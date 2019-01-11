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
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function loyalty() {
        return $this->hasOne(UserLoyalty::class);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */   
    public function addresses() {
        return $this->hasMany(UserAddress::class);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */      
    public function payments() {
        return $this->hasMany(UserPayment::class);
    }
}
