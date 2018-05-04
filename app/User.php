<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function posts(){
        return $this->hasMany('App\Post');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use \Illuminate\Auth\Authenticatable;
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
}
