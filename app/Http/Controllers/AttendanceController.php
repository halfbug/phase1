<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Level;
use App\Attendance;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $Attn = Attendance::latest()->paginate(5);


        return view('attendance.index',compact('Attn'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $Users = User::all();
        $Levels = Level::all();
        return view('attendance.create', compact('Levels'));
         //return view('attendance.create');
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
            'level_id' => 'required',
			'stid.*' => 'required',
			'datepicker' => 'required'
        ]);
      // Attendance::create($request->all());
		$name = $request->input('level_id');
		$date = $request->input('datepicker');
		$allstud[]=$request->get('stid');
		foreach($this->request->get('radio') as $b => $y) {
//		echo $st_id;
           Attendance::create(array('stid'[$b] => $name));
		}
		return redirect()->route('attendance.index')
            ->with('success','Attendance recorded successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
