<?php

namespace App\Http\Controllers;

use App\Parents;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;



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
       $parent=new Parents();
       $students=new Student();

       $studentid=Session::get('id');




     //   $item = student::firstOrNew(array('id' => Input::get('id')));
       // $item->id = Input::get('id');

        $parent->mother_name=$request->mother_name;
       $parent->student_id=$studentid;
        $parent->address=$request->address;
        $parent->m_home_phone =$request->m_home_phone;
        $parent->m_work_phone=$request->m_work_phone;
        $parent->m_email=$request->m_email;
        $parent->father_name=$request->father_name;
        $parent->father_job=$request->father_jon;
        $parent->f_home_phone=$request->f_home_phone;
        $parent->f_work_phone=$request->f_work_phone;
        $parent->f_email=$request->f_email;
        $parent->best_time_contact=$request->best_time_contact;
        $parent->guard_name=$request->guard_name;
        $parent->guard_add=$request->guard_add;
        $parent->guard_phone=$request->guard_phone;
        $parent->guard_email=$request->guard_email;
        $parent->user_id= Auth::user()->id;//// Passing Current user id
        $parent->save();



        return redirect()->route('parents.index')
            ->with('success','Parents Details Stored.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parents  $parent
     * @return \Illuminate\Http\Response
     */
    public function show(Parents $parent)
    {
        return view('parents.show',compact('parent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parents  $parent
     * @return \Illuminate\Http\Response
     */
    public function edit(Parents $parent)
    {
        return view('parents.edit', compact('parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parents  $parent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parents $parent)
    {
        request()->validate([
            'mother_name' => 'required',
            'father_name' => 'required',
        ]);


        $parent->update($request->all());


        return redirect()->route('parents.index')
            ->with('success','Parents record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parents  $parent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parents $parent)
    {
        $parent->delete();


        return redirect()->route('parents.index')
            ->with('success','Parents Record deleted successfully');
    }
}
