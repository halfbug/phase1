<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('students','StudentController');
Route::resource('students.create','StudentController');
Route::resource('courses', 'CourseController');

Route::get( '/ajax-student', array(
'as' => 'ajaxteach',
'uses' => 'StudentController@get_classstudents'
));

Route::resource('teachers','TeacherController');
Route::resource('teachers.create','TeacherController@create');


///attendance/////////////////////
Route::resource('attendance', 'AttendanceController');

// PARENTS///
Route::resource('parents','ParentsController');

Route::resource('parents.update','ParentsController@update');

// LEVELS
Route::resource('levels','LevelsController');
