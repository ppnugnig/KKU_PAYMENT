<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Schedule::first()->paginate(6);
        
        return view('schedules.index', compact('data'))
                ->with('i', (request()->input('page',1)-1)*6);

                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('schedules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'month' => 'required',
            'startdate' => 'required',
            'enddate' => 'required'
        ]);
        Schedule::create($request->all());

        return redirect()->route('schedules.index')
                        ->with('success','เพิ่มข้อมูลสำเร็จแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    
    public function show(Schedule $schedule)
    {
        //
        // return view('schedules.show', compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
        return view('schedules.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
        $request->validate([
            'month' => 'required',
            'startdate' => 'required',
            'enddate' => 'required'

        ]);
        $schedule->update($request->all());
        return redirect()->route('schedules.index')
                        ->with('success','แก้ไขข้อมูลสำเร็จแล้ว');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
        $schedule -> delete();
        return redirect()->route('schedules.index')
                        ->with('success', 'ลบข้อมูลสำเร็จแล้ว');
    }
    
}
