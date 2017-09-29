<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bibliography extends Model
{
    protected $fillable =  [
        'author', 'title', 'edition', 'country', 'editorial', 
        'year', 'pages_number', 'course_id'
    ];

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
