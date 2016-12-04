<?php

namespace App\Http\Controllers;

use App\Slot;
use Illuminate\Http\Request;
use App\DatesControl;

class DatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show the entire dates_control table
        $controls = DatesControl::all();

        return view('date.index')->with('controls', $controls);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('date.enableDate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create an instance to the table dates_controls
        $control = new DatesControl();

        //dd($request);

        //validation
        $this->validate($request, array(
            'disableon' => 'required|after:today',
        ));

        //saving the date to table
        $control->disableon = $request->disableon;
        $control->save();

        return redirect()->route('date.show', $control->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $control = DatesControl::find($id);
        return view('date.show')->with('control', $control);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $control = DatesControl::find($id);
        //dd($control);
        return view('date.edit')->with('control', $control);
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
        $control = DatesControl::find($id);

        //validation
        $this->validate($request, array(
            'disableon' => 'required|after:today',
        ));

        //dd($control);
        return redirect()->route('date.destroy', $control->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $control = DatesControl::find($id);

        $control->delete();

        return redirect()->route('date.index');

    }
}
