<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = array('name', 'status', 'description');

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users() {
        return $this->belongsToMany('User', 'user_task', 'task_id', 'user_id')->withPivot('role');
    }

    public function assets() {
        return $this->belongsToMany('Asset', 'task_asset', 'task_id', 'asset_id');
    }

    public function timeranges() {
        return $this->hasMany('TimeRange');
    }

    public function locations() {
        return $this->hasMany('Asset');
    }
}
