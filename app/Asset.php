<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'name', 'description'
    ];


    public function images()
    {
        return $this->hasMany('Image');
    }

    public function userassets()
    {
        return $this->hasMany('UserAsset');
    }


    public function tasks() {
        return $this->belongsToMany('Task', 'task_asset', 'asset_id', 'task_id');
    }
}
