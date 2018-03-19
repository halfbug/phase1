<?php

namespace App\Http\Controllers;

use App\Parents;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parents = Parents::latest()->paginate(5);


        return view('parents.index',compact('parents'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function indexall()
    {

        $parents = Parents::latest();


        return view('parents.index',compact('parents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parents.create', compact('parents'));
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
            'mother_name' => 'required',
            'father_name' => 'required',


        ]);
       $parents=new Parents();
       $students=new Student();

        $insertedId = $students->id;




     //   $item = student::firstOrNew(array('id' => Input::get('id')));
       // $item->id = Input::get('id');

        $parents->mother_name=$request->mother_name;
       $parents->student_id='1';
        $parents->address=$request->address;
        $parents->m_home_phone =$request->m_home_phone;
        $parents->m_work_phone=$request->m_work_phone;
        $parents->m_email=$request->m_email;
        $parents->father_name=$request->father_name;
        $parents->father_job=$request->father_jon;
        $parents->f_home_phone=$request->f_home_phone;
        $parents->f_work_phone=$request->f_work_phone;
        $parents->f_email=$request->f_email;
        $parents->best_time_contact=$request->best_time_contact;
        $parents->guard_name=$request->guard_name;
        $parents->guard_add=$request->guard_add;
        $parents->guard_phone=$request->guard_phone;
        $parents->guard_email=$request->guard_email;
        $parents->user_id= Auth::user()->id;//// Passing Current user id
        $parents->save();



        return redirect()->route('parents.index')
            ->with('success','Parents Details Stored.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parents  $parents
     * @return \Illuminate\Http\Response
     */
    public function show(Parents $parents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parents  $parents
     * @return \Illuminate\Http\Response
     */
    public function edit(Parents $parents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parents  $parents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parents $parents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parents  $parents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parents $parents)
    {
        //
    }
}
