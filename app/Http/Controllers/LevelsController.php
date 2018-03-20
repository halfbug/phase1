<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;
use Validator;
class LevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //   $Levels = Level::all();
        $level = Level::latest()->paginate(5);


        return view('levels.index',compact('level'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function indexall()
    {

        $level = Level::latest();


        return view('levels.index',compact('level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('levels.create', compact('level'));
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
            'name'=>'required|unique:levels,name',
        ]);
        $level = new Level;
        $level->name=$request->name;
        $level->save();


        return redirect()->route('levels.index')
            ->with('success','Level Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function show(Level $level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        return view('levels.edit', compact('level'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Level $level)
    {
        request()->validate([
            'name' => 'required',

        ]);


        $level->update($request->all());


        return redirect()->route('levels.index')
            ->with('success','Level updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {

        $level->delete();


        return redirect()->route('levels.index')
            ->with('success','Level deleted successfully');
    }
}
