<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable =  ['code', 'name' , 'last_name', 'position'];

    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
