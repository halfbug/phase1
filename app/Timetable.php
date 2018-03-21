<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $fillable = [
       'course_id', 'start_date','end_date',];
}
