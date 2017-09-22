<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable =  ['name', 'teacher_id'];

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function bibliographies()
    {
        return $this->hasMany('App\Bibliography');
    }

    public function weeks()
    {
        return $this->hasMany('App\Week');
    }
}
