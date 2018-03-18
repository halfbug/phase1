<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'details','duration', 'start_date','end_date', 'level_id'
    ];
}
