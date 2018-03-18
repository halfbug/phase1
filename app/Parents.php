<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Parents extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mother_name', 'address','m_home_phone','m_work_phone','m_email','father_name',
        'father_job','f_home_phone','f_work_phone','f_email','best_time_contact','guard_name',
        'guard_add','guard_phone','guard_email','user_id','student_id'
    ];
}