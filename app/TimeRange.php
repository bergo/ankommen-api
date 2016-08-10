<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeRange extends Model
{

    protected $fillable = [
        'name', 'starttime', 'endtime', 'dayofweek'
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
