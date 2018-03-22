<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $fillable = [
       'course_id', 'start_date','end_date','level_id'];
    public function course()
    {
        return $this->belongsTo(Course::class);

    }

    public function level()
    {
        return $this->belongsTo(Level::class);

    }
}
