<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $fillable =  ['number', 'content', 'subjects_id'];

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function contents()
    {
        return $this->hasMany('App\Content');
    }
}
