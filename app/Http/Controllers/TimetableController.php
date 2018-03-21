<?php

namespace App\Http\Controllers;

use App\timetable;
use App\Course;
use App\Level;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Levels = Level::all();
        $Courses = Course::all();

        $timetable = Timetable::latest()->paginate(5);
        return view('timetables.index',compact('timetable','Levels','Courses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Courses = Course::all();

        $Levels = Level::all();
        return view('timetables.create', compact('Courses','Levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Timetable::create($request->all());

        return redirect()->route('timetables.index')
            ->with('success','Time Table created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function show(timetable $timetable)
    {
        return view('timetables.show',compact('timetable'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function edit(timetable $timetable)
    {
        $Courses = Course::all();

        return view('timetables.edit',compact('timetable','Courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, timetable $timetable)
    {
        $timetable->update($request->all());


        return redirect()->route('timetables.index')
            ->with('success','Time Table updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\timetable  $timetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(timetable $timetable)
    {
        $timetable->delete();
        return redirect()->route('timetables.index')
            ->with('success',' Record deleted successfully');

    }
}
