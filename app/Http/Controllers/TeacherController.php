<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Level;
use Illuminate\Http\Request;
use Auth;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::latest()->paginate(5);
        return view('teachers.index',compact('teachers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
	
	
    public function indexall()
    {
        $teachers = Teacher::latest();
        return view('teachers.index',compact('teachers'));
    }




 public function create()
    {
        //
        $Levels = Level::all();
        return view('teachers.create', compact('Levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'father_name' => '',
            'religion' => '',
            'address' => '' ,
            'phone' => '' ,
			'date_of_birth' => '',
			'assigned_class' => '',
			'qualification' => '',
			'maritalstatus' => '',
			'join_date' => '',
			'qualification' => '',
			'email' => 'required',

        ]);
        $teacher=new Teacher;
        $teacher->name=$request->name;
        $teacher->father_name=$request->father_name;
        $teacher->religion=$request->religion;
        $teacher->address =$request->address;
        $teacher->phone=$request->phone;
        $teacher->email=$request->email;
        $teacher->gender=$request->gender;
        $teacher->qualification=$request->qualification;
        $teacher->salary=$request->salary;
        $teacher->maritalstatus=$request->maritalstatus;
        $teacher->assigned_class=$request->assigned_class;
        $teacher->joindate=$request->join_date;
        $teacher->date_of_birth=$request->date_of_birth;
        $teacher->user_id= Auth::user()->id;//// Passing Current user id 
		$teacher->save();




        return redirect()->route('teachers.index')
            ->with('success','Teacher registered successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
         return view('teachers.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
        $Levels = Level::all();

        return view('teachers.edit',compact('teacher','Levels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        request()->validate([
            'name' => 'required',
            'father_name' => 'required',
        ]);


        $teacher->update($request->all());


        return redirect()->route('teachers.index')
            ->with('success','Teacher record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();


        return redirect()->route('teachers.index')
            ->with('success','Teacher Record deleted successfully');
    }
}
