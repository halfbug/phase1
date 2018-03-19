<?php
namespace App;


use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'father_name','gender','religion','address','phone','email','date_of_birth','for_class','level_id','user_id','reg_no'
    ];



    public static function updateTable( $data )
    {
        $t = new Student ;//Table would be the name of your model / table

  $t->id = $data['id'];

  $t->save();

  return $t->id;
}
}