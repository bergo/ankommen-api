<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = [
        'name', 'content'
    ];

    public function asset()
    {
        return $this->belongsTo('Asset');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}
