<?php

namespace App\Http\Controllers;

use App\Parents;
use App\Student;
use App\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Levels = Level::all();
        $students = Student::latest()->paginate(5);


        return view('students.index',compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function indexall()
    {

        $students = Student::latest();


        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 
public function get_classstudents(Request $request)
{
    $level_namee = $request->level_name;
    $studentslist = \DB::table("students")
        ->select("id", "name")
        ->where('for_class', '=', $level_namee)
        ->get();
    //$studentslist = Student::all()->where('for_class', '=', $level_namee)->get();

    return response()->json($studentslist);

    //return response()->json(['response' => $studentslist]);
}




 public function create()
    {
        //
        $Levels = Level::all();
        return view('students.create', compact('Levels'));
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
            'father_name' => 'required',
            'religion' => '',
            'address' => '' ,
            'phone' => '' ,
        'date_of_birth' => '',
       'for_class' => ' ',

        ]);
        $student=new Student;
        $student->name=$request->name;
        $student->father_name=$request->father_name;
        $student->religion=$request->religion;
        $student->address =$request->address;
        $student->phone=$request->phone;
        $student->gender=$request->gender;
        $student->level_id=$request->level_id;
        $student->reg_no=$request->reg_no;
        $student->date_of_birth=$request->date_of_birth;

        $student->user_id= Auth::user()->id;//// Passing Current user id
       $student->save();
        Session::put('id', $student->id);




// insert student id into parents table
    //   Student::create($request->all());


        return redirect()->route('students.index')
            ->with('success','Student registered successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
         return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //

        return view('students.edit', compact('student'));
       // return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        request()->validate([
            'name' => 'required',
            'father_name' => 'required',
        ]);


        $student->update($request->all());


        return redirect()->route('students.index')
            ->with('success','Student record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();


        return redirect()->route('students.index')
            ->with('success','Student Record deleted successfully');
    }
}
