<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAsset extends Model
{

    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function asset()
    {
        return $this->belongsTo('Asset');
    }

    public function timeranges()
    {
        return $this->hasMany('TimeRange');
    }

    public function locations()
    {
        return $this->hasMany('Location');
    }
}
