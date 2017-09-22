<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable =  ['name', 'last_name'];

    public function subjects()
    {
        return $this->hasMany('App\Subject');
    }
}
