<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable =  [
        'title', 'content', 'week_id'
    ];

    public function week()
    {
        return $this->belongsTo('App\Week');
    }
}
