<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $fillable =  [
        'number', 'previous_tasks', 'evaluation_indicators', 
        'evaluation_criterial', 'learning_activity', 'actitudinal', 
        'procedimental', 'conceptual','terminal_capacity', 'course_id'];

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
