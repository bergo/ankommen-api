<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{

    protected $fillable = [
        'role'
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function task()
    {
        return $this->belongsTo('Task');
    }
}
