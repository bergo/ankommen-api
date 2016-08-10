<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name', 'longitude', 'latitude', 'radius'
    ];

    public function userasset()
    {
        return $this->belongsTo('UserAsset');
    }

    public function task()
    {
        return $this->belongsTo('Task');
    }
}
