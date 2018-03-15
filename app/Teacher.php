<?php
namespace App;


use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'father_name','gender','religion','address','phone','email','date_of_birth', 'maritalstatus', 'qualification', 'join_date','salary'
    ];
}