<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bibliography extends Model
{
    protected $fillable =  [
        'title', 'edition', 'country', 'editorial', 
        'year', 'number_page', 'subject_id'
    ];

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
