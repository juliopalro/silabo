<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable =  ['name', 'code', 'credit_number', 
                            'weekly_hours', 'teacher_id'];

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
