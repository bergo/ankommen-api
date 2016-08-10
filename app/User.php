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

    public function userassets()
    {
        return $this->hasMany('UserAsset');
    }

    public function images()
    {
        return $this->hasMany('Image');
    }

    public function tasks() {
        return $this->belongsToMany('Task', 'user_task', 'user_id', 'task_id')->withPivot('role');
    }

}
